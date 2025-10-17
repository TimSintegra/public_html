<?php
/**
 * User class
 * @author: Almaz Ibragimov <almaz@intis-it.ru>
 * @date: 12.12.12
 * @time: 5:28
 * @version:
 * @link http://redmine.sms16.ru/issues/
 */
class User
{
    function confirmUser($username, $password, $network=array())
    {
        global $db, $exe;
        $return = array();
        if (count($network) != 0) {
            $result = $db->getRow("select password, username, fio from users where username = '" . $username ."' AND network='"
                . $network['title'] . "' AND network_uid='" . $network['uid'] . "' AND active='1'");
            if(!$result)
            {
                $return['error'] = 1;
                $return['error_text'] = "В базе нет такого пользователя, либо аккаунт заблокирован";
                $return['username'] = '';
                $return['password'] = '';
                $return['fio'] = '';
                return $return; //Ошибка, нет такого пользователя или e-mail не активирован
            } else {
                $return['error'] = 0;
                $return['username'] = $result['username'];
                $return['password'] = $result['password'];
                if ($result['fio']) {
                    $return['fio'] = $result['fio'];
                } else {
                    $return['fio'] = $result['username'];
                }
                return $return;
            }
        } else {
            $result = $db->getRow("select password, username, fio from users where username='" . $username . "' AND active='1'");
            if(!$result)
            {
                $return['error'] = 1;
                $return['error_text'] = "В базе нет такого пользователя, либо аккаунт заблокирован";
                $return['username'] = '';
                $return['fio'] = '';
                return $return; //Ошибка, нет такого пользователя или e-mail не активирован
            }

            $password = $exe->quote_smart($password);

            /* Проверяем правильный ли пароль */
            if($password == $result['password'])
            {
                $return['error'] = 0;
                $return['username'] = $result['username'];
                if ($result['fio']) {
                    $return['fio'] = $result['fio'];
                } else {
                    $return['fio'] = $result['username'];
                }
                return $return; //Пользователь правильный
            }
            else
            {
                $return['error'] = 1;
                $return['error_text'] = "Пароль неверный";
                $return['username'] = '';
                $return['fio'] = '';
                return $return; //Ошибка пароля
            }
        }
    }


    function checkLogin()
    {
        global $db, $exe;
        if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookpass']))
        {
            $_SESSION['username'] = $_COOKIE['cookname'];
            $_SESSION['password'] = $_COOKIE['cookpass'];
            $_SESSION['ufio'] = $_COOKIE['ufio'];
            $db->exec("update users set lastip='" . $exe->quote_smart($_SERVER['REMOTE_ADDR']) . "' where username='"
                . $exe->quote_smart($_COOKIE['cookname']) . "' AND active='1'");
        }
        /* если сессии есть  */
        //echo $_SESSION['username'];
        if(isset($_SESSION['username']) && isset($_SESSION['password']))
        {
            //echo $_SESSION['username'];
            //echo confirmUser($_SESSION['username'], $_SESSION['password']);
            /* проверяем что пользователь правильный */
            $answer = $this->confirmUser($_SESSION['username'], $_SESSION['password']);
            if($answer['error'] != 0)
            {
                /* если не подходит то пользователь не войдет */
                unset($_SESSION['username']);
                unset($_SESSION['password']);
                unset($_SESSION['ufio']);
                return false;
            }
            return true;
        }
        /* пользователь вошел */
        else
        {
            return false;
        }
    }

    function uid() {
        global $db;
        if (isset($_SESSION['username'])) {
            $uid = $db->getOne("SELECT id FROM users WHERE username='" . $_SESSION['username'] . "' AND active='1'");
        } else {
            $uid = 0;
        }
        return $uid;
    }

}
