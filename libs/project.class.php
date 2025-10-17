<?php
/**
 * Project class
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 30.09.13
 * @time 6:02
 * @version 1.0
 *
 */

class project {

    function MainMenu($sec, $id){
        global $db;
        $mainMenu = array();
        $MainCats = $db->getAll("SELECT * FROM mainmenu WHERE active='1' ORDER BY msort");
        if ($MainCats) {
            foreach ($MainCats as $MainCat) {
                switch ($MainCat['module']) {
                    case 'pages':
                        if ($MainCat['pid'] != 0 && $MainCat['cid'] != 0) {
                            $pidUrl = $db->getOne("SELECT url FROM pages WHERE id='" . $MainCat['cid'] . "'");
                            if ($sec == 'pages' && $id == $MainCat['cid']) {
                                $active = 1;
                            } else {
                                $active = 0;
                            }
                            $url = _MAIN_URL . '/pages/' . $pidUrl . '.html';
                            $subcats = array();
                        } elseif ($MainCat['pid'] != 0 && $MainCat['cid'] == 0) {
                            if ($sec == 'pagescats' && $id == $MainCat['pid']) {
                                $active = 1;
                            } else {
                                $active = 0;
                            }
                            $pidUrl = $db->getOne("SELECT url FROM pagescats WHERE id='" . $MainCat['pid'] . "'");
                            $url = _MAIN_URL . '/pagescats/' . $pidUrl . '.html';
                            $subcats = array();
                            $allSubCats = $db->getAll("SELECT * FROM pages WHERE cid='" . $MainCat['pid']
                                . "' AND active='1' ORDER BY id DESC");
                            if ($allSubCats) {
                                foreach ($allSubCats as $oneSubCat) {
                                    $subcats[$oneSubCat['id']] = array(
                                        'url' => _MAIN_URL . '/pages/' . $oneSubCat['url'] . '.html',
                                        'title' => $oneSubCat['title']
                                    );
                                }
                            }
                        } else {
                            $active = 0;
                            $url = _MAIN_URL . '/' . $MainCat['module'] . '.html';
                            $subcats = array();
                            $allSubCats = $db->getAll("SELECT * FROM pagescats WHERE active='1' ORDER BY id DESC");
                            if ($allSubCats) {
                                foreach ($allSubCats as $oneSubCat) {
                                    $subcats[$oneSubCat['id']] = array(
                                        'url' => _MAIN_URL . '/pages/' . $oneSubCat['url'] . '.html',
                                        'title' => $oneSubCat['title']
                                    );
                                }
                            }
                        }
                        $mainMenu[$MainCat['id']] = array(
                            'url' => $url,
                            'title' => $MainCat['title'],
                            'active' => $active,
                            'subcats' => $subcats
                        );
                        break;
                    case 'services':
                        if ($MainCat['pid'] != 0 && $MainCat['cid'] != 0) {
                            $pidUrl = $db->getOne("SELECT url FROM services WHERE id='" . $MainCat['cid'] . "'");
                            if ($sec == 'services' && $id == $MainCat['cid']) {
                                $active = 1;
                            } else {
                                $active = 0;
                            }
                            $url = _MAIN_URL . '/services/' . $pidUrl . '.html';
                            $subcats = array();
                        } elseif ($MainCat['pid'] != 0 && $MainCat['cid'] == 0) {
                            if ($sec == 'servicescats' && $id == $MainCat['pid']) {
                                $active = 1;
                            } else {
                                $active = 0;
                            }
                            $pidUrl = $db->getOne("SELECT url FROM servicescats WHERE id='" . $MainCat['pid'] . "'");
                            $url = _MAIN_URL . '/servicescats/' . $pidUrl . '.html';
                            $subcats = array();
                            $allSubCats = $db->getAll("SELECT * FROM services WHERE cid='" . $MainCat['pid']
                                . "' AND active='1' ORDER BY id DESC");
                            if ($allSubCats) {
                                foreach ($allSubCats as $oneSubCat) {
                                    $subcats[$oneSubCat['id']] = array(
                                        'url' => _MAIN_URL . '/services/' . $oneSubCat['url'] . '.html',
                                        'title' => $oneSubCat['title']
                                    );
                                }
                            }
                        } else {
                            $active = 0;
                            $url = _MAIN_URL . '/' . $MainCat['module'] . '.html';
                            $subcats = array();
                            $allSubCats = $db->getAll("SELECT * FROM servicescats WHERE active='1' ORDER BY id DESC");
                            if ($allSubCats) {
                                foreach ($allSubCats as $oneSubCat) {
                                    $subcats[$oneSubCat['id']] = array(
                                        'url' => _MAIN_URL . '/services/' . $oneSubCat['url'] . '.html',
                                        'title' => $oneSubCat['title']
                                    );
                                }
                            }
                        }
                        $mainMenu[$MainCat['id']] = array(
                            'url' => $url,
                            'title' => $MainCat['title'],
                            'active' => $active,
                            'subcats' => $subcats
                        );
                        break;
                    case 'products':
                        $url = _MAIN_URL . '/' . $MainCat['module'] . '.html';
                        $subcats = array();
                        $allSubCats = $db->getAll("SELECT * FROM producers WHERE active='1' ORDER BY id DESC");
                        if ($allSubCats) {
                            foreach ($allSubCats as $oneSubCat) {
                                $subcats[$oneSubCat['id']] = array(
                                    'url' => _MAIN_URL . '/products/' . $oneSubCat['url'] . '.html',
                                    'title' => $oneSubCat['title']
                                );
                            }
                        }
                        if ($sec == $MainCat['module']) {
                            $active = 1;
                        } else {
                            $active = 0;
                        }
                        $mainMenu[$MainCat['id']] = array(
                            'url' => $url,
                            'title' => $MainCat['title'],
                            'active' => $active,
                            'subcats' => $subcats
                        );
                        break;
                    case 'link':
                        $mainMenu[$MainCat['id']] = array(
                            'url' => $MainCat['link'],
                            'title' => $MainCat['title'],
                            'active' => 0,
                            'subcats' => array()
                        );
                        break;
                    default:
                        if ($sec == $MainCat['module']) {
                            $active = 1;
                        } else {
                            $active = 0;
                        }
                        $mainMenu[$MainCat['id']] = array(
                            'url' => '/' . $MainCat['module'] . '.html',
                            'title' => $MainCat['title'],
                            'active' => $active,
                            'subcats' => array()
                        );
                        break;
                }
            }
        }
        return $mainMenu;
    }

    function SideMenu(){
        global $db;
        $mainMenu = array();
        $MainCats = $db->getAll("SELECT * FROM blocks WHERE active='1' ORDER BY msort");
        if ($MainCats) {
            foreach ($MainCats as $MainCat) {
                switch ($MainCat['module']) {
                    case 'pages':
                        if ($MainCat['pid'] != 0) {
                            $pidUrl = $db->getOne("SELECT url FROM pagescats WHERE id='" . $MainCat['pid'] . "'");
                            $url = _MAIN_URL . '/pagescats/' . $pidUrl . '.html';
                            $subcats = array();
                            $allSubCats = $db->getAll("SELECT * FROM pages WHERE cid='" . $MainCat['pid']
                                . "' AND active='1' LIMIT 15");
                            if ($allSubCats) {
                                foreach ($allSubCats as $oneSubCat) {
                                    $subcats[$oneSubCat['id']] = array(
                                        'url' => _MAIN_URL . '/pages/' . $oneSubCat['url'] . '.html',
                                        'title' => $oneSubCat['title'],
                                    );
                                }
                            }
                        } else {
                            $url = _MAIN_URL . '/' . $MainCat['module'] . '.html';
                            $subcats = array();
                            $allSubCats = $db->getAll("SELECT * FROM pagescats WHERE active='1' LIMIT 15");
                            if ($allSubCats) {
                                foreach ($allSubCats as $oneSubCat) {
                                    $subcats[$oneSubCat['id']] = array(
                                        'url' => _MAIN_URL . '/pages/' . $oneSubCat['url'] . '.html',
                                        'title' => $oneSubCat['title'],
                                    );
                                }
                            }
                        }
                        $mainMenu[$MainCat['id']] = array(
                            'url' => $url,
                            'title' => $MainCat['title'],
                            'class' => $MainCat['class'],
                            'subcats' => $subcats
                        );
                        break;
                    case 'units':
                        if ($MainCat['pid'] != 0) {
                            $pidUrl = $db->getOne("SELECT url FROM unitscats WHERE id='" . $MainCat['pid'] . "'");
                            $url = _MAIN_URL . '/unitscats/' . $pidUrl . '.html';
                            $subcats = array();
                            $allSubCats = $db->getAll("SELECT * FROM units WHERE cid='" . $MainCat['pid']
                                . "' AND active='1' ORDER BY msort LIMIT 15");
                            if ($allSubCats) {
                                foreach ($allSubCats as $oneSubCat) {
                                    $subcats[$oneSubCat['id']] = array(
                                        'url' => _MAIN_URL . '/units/' . $oneSubCat['url'] . '.html',
                                        'title' => $oneSubCat['title'],
                                    );
                                }
                            }
                        } else {
                            $url = _MAIN_URL . '/' . $MainCat['module'] . '.html';
                            $subcats = array();
                            $firstUnitPage = $db->getRow("SELECT * FROM units WHERE id='1'");
                            $subcats[0] = array(
                                'url' => _MAIN_URL . '/units/' . $firstUnitPage['url'] . '.html',
                                'title' => $firstUnitPage['title'],
                            );
                            $allSubCats = $db->getAll("SELECT * FROM unitscats WHERE id>1 AND active='1' ORDER BY msort LIMIT 15");
                            if ($allSubCats) {
                                foreach ($allSubCats as $oneSubCat) {
                                    $subcats[$oneSubCat['id']] = array(
                                        'url' => _MAIN_URL . '/unitscats/' . $oneSubCat['url'] . '.html',
                                        'title' => $oneSubCat['title'],
                                    );
                                }
                            }
                            $allPagesFromOne = $db->getAll("SELECT * FROM units WHERE cid='1' AND id>1 AND active='1' ORDER BY msort");
                            if ($allPagesFromOne) {
                                foreach ($allPagesFromOne as $oneSubCatCid) {
                                    $subcats[$oneSubCatCid['cid'] . '_' . $oneSubCatCid['id']] = array(
                                        'url' => _MAIN_URL . '/units/' . $oneSubCatCid['url'] . '.html',
                                        'title' => $oneSubCatCid['title'],
                                    );
                                }
                            }
                        }
                        $mainMenu[$MainCat['id']] = array(
                            'url' => $url,
                            'title' => $MainCat['title'],
                            'class' => $MainCat['class'],
                            'subcats' => $subcats
                        );
                        break;
                    case 'media':
                        $subcats = array();
                        $url = _MAIN_URL . '/media.html';
                        $subcats[1] = array(
                            'url' => _MAIN_URL . '/photos.html',
                            'title' => 'Фоторепортажи',
                        );
                        $subcats[2] = array(
                            'url' => _MAIN_URL . '/video.html',
                            'title' => 'Видео',
                        );
                        $mainMenu[$MainCat['id']] = array(
                            'url' => $url,
                            'title' => $MainCat['title'],
                            'class' => $MainCat['class'],
                            'subcats' => $subcats
                        );
                        break;
                    default:
                        $mainMenu[$MainCat['id']] = array(
                            'url' => '/' . $MainCat['module'] . '.html',
                            'title' => $MainCat['title'],
                            'subcats' => array()
                        );
                        break;
                }
            }
        }
        return $mainMenu;
    }

    function getTypePrices($limit) {
        global $db;
        $calcData = array();

        $queryTypes = "SELECT * FROM `repair_types` ORDER BY msort LIMIT " . $limit;

        $allTypes = $db->getAll($queryTypes);

        if ($allTypes) {

            foreach($allTypes as $_type) {
                if ($_type['link'] != '') {
                    $link = $_type['link'];
                } else {
                    $link = 'javascript:void(0)';
                }
                $calcData[$_type['id']] = array(
                    'title' => $_type['title'],
                    'price' => $_type['price'],
                    'link' => $link
                );
            }
        }

        return $calcData;
    }

    function getAdvantages() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM advantages WHERE active='1' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $image = _MAIN_URL . "/content/img/main/" . $news['image'];
                } else {
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'image' => $image,
                    'title' => $news['title'],
                );
            }
        }
        return $showNews;
    }

    function getBlocks() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM blocks WHERE active='1' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $image = _MAIN_URL . "/content/img/sliders/" . $news['image'];
                } else {
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'image' => $image,
                    'side' => $news['side'],
                    'link' => $news['link'],
                    'link_text' => $news['link_text'],
                    'text1_style' => $news['text1_style'],
                    'text1' => $news['text1'],
                    'text2_style' => $news['text2_style'],
                    'text2' => $news['text2'],
                );
            }
        }
        return $showNews;
    }

    function getFirstBlock() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM blocks WHERE active='1' ORDER BY msort LIMIT 1";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $image = _MAIN_URL . "/content/img/sliders/" . $news['image'];
                } else {
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'image' => $image,
                    'side' => $news['side'],
                    'link' => $news['link'],
                    'link_text' => $news['link_text'],
                    'text1_style' => $news['text1_style'],
                    'text1' => $news['text1'],
                    'text2_style' => $news['text2_style'],
                    'text2' => $news['text2'],
                );
            }
        }
        return $showNews;
    }

    function getSlider() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM sliders WHERE active='1' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $image = _MAIN_URL . "/content/img/sliders/" . $news['image'];
                } else {
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'image' => $image,
                    'title' => $news['title'],
                );
            }
        }
        return $showNews;
    }

    function getCertificates() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM certificates WHERE active='1' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $smallImage = _MAIN_URL . "/content/img/cert/sm/" . $news['image'];
                    $image = _MAIN_URL . "/content/img/cert/" . $news['image'];
                } else {
                    $smallImage = '';
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'title' => $news['title'],
                    'image' => $image,
                    'smallImage' => $smallImage
                );
            }
        }
        return $showNews;
    }

    function getReviews($limit) {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM reviews WHERE active='1' AND main='1' ORDER BY msort LIMIT " . $limit;
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $image = _MAIN_URL . "/content/img/projects/" . $news['image'];
                } else {
                    $image = '';
                }
                $mainText = strip_tags($news['main_text']);
                if (mb_strlen($mainText) > 350) {
                    $mainText = mb_substr($mainText, 0, 350) . '...';
                    $button = 1;
                } else {
                    $button = 0;
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'image' => $image,
                    'title' => $news['title'],
                    'main_text' => $mainText,
                    'person' => $news['person'],
                    'button' => $button
                );
            }
        }
        return $showNews;
    }

    function getThanks() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM thanks WHERE active='1' AND main='1' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $smallImage = _MAIN_URL . "/content/img/cert/sm2/" . $news['image'];
                    $image = _MAIN_URL . "/content/img/cert/" . $news['image'];
                } else {
                    $smallImage = '';
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'image' => $image,
                    'smallImage' => $smallImage
                );
            }
        }
        return $showNews;
    }

    function getPartnerBlock() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM partners WHERE active='1' AND main='1' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $image = _MAIN_URL . "/content/img/partners/" . $news['image'];
                } else {
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'image' => $image,
                    'title' => $news['title']
                );
            }
        }
        return $showNews;
    }

    function getProjectSlider() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM projects WHERE active='1' AND image!='' AND main='1' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $image = _MAIN_URL . "/content/img/photos/" . $news['image'];
                } else {
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'image' => $image,
                    'url' => $news['url'],
                    'title' => $news['title'],
                    'short_text' => $news['short_text']
                );
            }
        }
        return $showNews;
    }

    function getServiceBlock() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM services WHERE active='1' AND main='1' AND image!='' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                if ($news['image'] != '') {
                    $image = _MAIN_URL . "/content/img/pages/" . $news['image'];
                } else {
                    $image = '';
                }
                $showNews[] = array(
                    'id' => $news['id'],
                    'title' => $news['title'],
                    'image' => $image,
                    'url' => _MAIN_URL . "/services/" . $news['url'] . ".html"
                );
            }
        }
        return $showNews;
    }

    function getShemaCoord() {
        global $db;
        $ShemaCoord = $db->getOne("SELECT shema FROM contacts WHERE id='1'");
        return $ShemaCoord;
    }

    function getPageDate($sec, $id = 0){
        global $db, $exe;
        if ($sec == 'index') {
            $query = "SELECT regdate FROM `blocks` WHERE active='1' UNION "
                . "SELECT regdate FROM `buttons` WHERE active='1' UNION "
                . "SELECT regdate FROM `mainmenu` WHERE active='1' UNION "
                . "SELECT regdate FROM `sliders` WHERE active='1' ORDER BY regdate DESC LIMIT 1";
        } else {
            if ($id != 0) {
                $query = "SELECT regdate FROM `" . $sec . "` WHERE id='" . $id . "'";
            } else {
                $query = "SELECT regdate FROM `" . $sec . "` ORDER BY regdate DESC limit 1";
            }
        }

        $regDate = $db->getOne($query);
        $regDateFormat = $exe->MysqlDateToText($regDate, 4);

        return $regDateFormat;
    }

    function getButtons() {
        global $db;
        $showNews = array();
        $query = "SELECT * FROM buttons WHERE active='1' ORDER BY msort";
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                $showNews[] = array(
                    'id' => $news['id'],
                    'url' => $news['url'],
                    'title' => $news['title']
                );
            }
        }
        return $showNews;
    }

    function getNews($limit = 0) {
        global $db, $exe;
        $showNews = array();
        $query = "SELECT * FROM news WHERE active='1' ORDER BY regdate DESC LIMIT " . $limit;
        $getNews = $db->getAll($query);
        if ($getNews) {
            foreach ($getNews as $news) {
                $showNews[] = array(
                    'id' => $news['id'],
                    'url' => _MAIN_URL . "/news/" . $news['url'] . ".html",
                    'title' => $news['title'],
                    'regdate' => $exe->MysqlDateToText($news['regdate']),
                );
            }
        }
        return $showNews;
    }


}