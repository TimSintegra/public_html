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
    function confirmUser($username, $password)
    {
        global $db, $exe;
        $result = $db->getOne("select password from admins where username = '$username' AND active='1'");
        if(!$result)
        {
            return 1; //Ошибка, нет такого пользователя или e-mail не активирован
        }
        $result  = $exe->quote_smart($result);
        $password = $exe->quote_smart($password);

        /* Проверяем правильный ли пароль */
        if($password == $result)
        {
            return 0; //Пользователь правильный
        }
        else
        {
            return 2; //Ошибка пароля
        }
    }

    function checkLogin()
    {
        global $db, $exe;
        if(isset($_COOKIE['acookname']) && isset($_COOKIE['acookpass']))
        {
            $_SESSION['adminuser'] = $_COOKIE['acookname'];
            $_SESSION['adminpass'] = $_COOKIE['acookpass'];
            $db->exec("update admins set lastip='" . $exe->quote_smart($_SERVER['REMOTE_ADDR'])
                . "' where username='" . $exe->quote_smart($_COOKIE['acookname']) . "'");
        }
        /* если сессии есть  */
        //echo $_SESSION['username'];
        if(isset($_SESSION['adminuser']) && isset($_SESSION['adminpass']))
        {
            //echo $_SESSION['username'];
            //echo confirmUser($_SESSION['username'], $_SESSION['password']);
            /* проверяем что пользователь правильный */
            if($this->confirmUser($_SESSION['adminuser'], $_SESSION['adminpass']) != 0)
            {
                /* если не подходит то пользователь не войдет */
                unset($_SESSION['adminuser']);
                unset($_SESSION['adminpass']);
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

    function getRole ($username) {
        global $db;
        $perm = $db->getRow("SELECT role, eid FROM admins WHERE username='" . $username . "'");
        return $perm;
    }

}
