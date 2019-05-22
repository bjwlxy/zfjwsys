<?php
/**
 * Created by PhpStorm.
 * User: 锅岛霖懿
 * Date: 2019-02-24
 * Time: 17:13
 */

namespace zfjwsys\tools;
class Test extends BaseSnail
{
    public function index()
    {
        $this->studentcode = 201696094025;
        $this->password = 'agmt.13579';
        $url = 'http://ems.bjwlxy.cn/tjkbcx.aspx?xh=201696094025&xm=';
        $query = '//*[@id="Table1"]/tr/td';
        $default = array(
            '__EVENTTARGET' => 'xq',
            '__EVENTARGUMENT' => '',
            '__VIEWSTATE' => 'dDwtMTQ0Mjk5MTgxMjt0PHA8bDx4c3p5ZG07PjtsPDk2MDk7Pj47bDxpPDE+Oz47bDx0PDtsPGk8MT47aTwzPjtpPDU+O2k8Nz47aTw5PjtpPDExPjtpPDEzPjtpPDE1PjtpPDE5PjtpPDIxPjtpPDIzPjtpPDI1Pjs+O2w8dDx0PHA8cDxsPERhdGFUZXh0RmllbGQ7RGF0YVZhbHVlRmllbGQ7PjtsPHhuO3huOz4+Oz47dDxpPDM+O0A8MjAxOC0yMDE5OzIwMTctMjAxODsyMDE2LTIwMTc7PjtAPDIwMTgtMjAxOTsyMDE3LTIwMTg7MjAxNi0yMDE3Oz4+O2w8aTwwPjs+Pjs7Pjt0PHQ8cDxwPGw8RGF0YVRleHRGaWVsZDtEYXRhVmFsdWVGaWVsZDs+O2w8eHE7eHE7Pj47Pjt0PGk8Mj47QDwxOzI7PjtAPDE7Mjs+PjtsPGk8MD47Pj47Oz47dDx0PHA8cDxsPERhdGFUZXh0RmllbGQ7RGF0YVZhbHVlRmllbGQ7VmlzaWJsZTs+O2w8eHhxO3h4cXY7bzxmPjs+Pjs+O3Q8aTwwPjtAPD47QDw+Pjs+Ozs+O3Q8dDxwPHA8bDxEYXRhVGV4dEZpZWxkO0RhdGFWYWx1ZUZpZWxkOz47bDxuajtuajs+Pjs+O3Q8aTw1PjtAPDIwMTg7MjAxNzsyMDE2OzIwMTU7MjAxNDs+O0A8MjAxODsyMDE3OzIwMTY7MjAxNTsyMDE0Oz4+O2w8aTwyPjs+Pjs7Pjt0PHQ8cDxwPGw8RGF0YVRleHRGaWVsZDtEYXRhVmFsdWVGaWVsZDs+O2w8eHltYzt4eWRtOz4+Oz47dDxpPDE2PjtAPOaUv+azleWtpumZojvmlZnogrLlrabpmaI75paH5a2m5LiO5paw6Ze75Lyg5pKt5a2m6ZmiO+WkluWbveivreWtpumZojvljoblj7LmlofljJbkuI7ml4XmuLjlrabpmaI757uP5rWO566h55CG5a2m6ZmiO+e+juacr+WtpumZojvpn7PkuZDlrabpmaI75pWw5a2m5LiO5L+h5oGv56eR5a2m5a2m6ZmiO+eJqeeQhuS4juWFieeUteaKgOacr+WtpumZojvljJblrabljJblt6XlrabpmaI75Zyw55CG5LiO546v5aKD5a2m6ZmiO+acuuaisOW3peeoi+WtpumZojvnlLXlrZDnlLXmsJTlt6XnqIvlrabpmaI76K6h566X5py65a2m6ZmiO+S9k+iCsuWtpumZojs+O0A8ODI7ODM7ODQ7ODU7ODY7ODc7ODg7ODk7OTA7OTE7OTI7OTM7OTQ7OTU7OTY7OTc7Pj47bDxpPDE0Pjs+Pjs7Pjt0PHQ8cDxwPGw8RGF0YVRleHRGaWVsZDtEYXRhVmFsdWVGaWVsZDs+O2w8enltYzt6eWRtOz4+Oz47dDxpPDExPjtAPOiuoeeul+acuuenkeWtpuS4juaKgOacrzvorqHnrpfmnLrlupTnlKjmioDmnK/vvIjpq5jogYzvvIk76K6h566X5py6572R57uc5oqA5pyv77yI6auY6IGM77yJO+iuoeeul+acuuWPiuW6lOeUqO+8iOmrmOiBjO+8iTvorqHnrpfmnLrnp5HlrabkuI7mioDmnK/vvIjkuJPljYfmnKzvvIk76L2v5Lu25bel56iLO+eJqeiBlOe9keW3peeoizvova/ku7blt6XnqIsoMTPniYgpO+eJqeiBlOe9keW3peeoiygxM+eJiCk76K6h566X5py656eR5a2m5LiO5oqA5pyvKDEz54mIKTtcZTs+O0A8OTYwMTs5NjAyOzk2MDM7OTYwNDs5NjA1Ozk2MDY7OTYwNzs5NjA4Ozk2MDk7OTYxMDtcZTs+PjtsPGk8OD47Pj47Oz47dDx0PHA8cDxsPERhdGFUZXh0RmllbGQ7RGF0YVZhbHVlRmllbGQ7PjtsPHRqa2JtYzt0amtiZG07Pj47Pjt0PGk8Mz47QDxcZTsyMDE257qn54mp6IGU572R5bel56iLMeePrTsyMDE257qn54mp6IGU572R5bel56iLMuePrTs+O0A8XGU7MjAxNjk2MDkyMDE4LTIwMTkxMjAxNjk2MDkwMTsyMDE2OTYwOTIwMTgtMjAxOTEyMDE2OTYwOTAyOz4+O2w8aTwxPjs+Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPFxlOz4+Oz47Oz47dDw7bDxpPDU+Oz47bDx0PEAwPDs7Ozs7Ozs7Ozs+Ozs+Oz4+O3Q8cDxwPGw8VGV4dDs+O2w8XGU7Pj47Pjs7Pjt0PEAwPHA8cDxsPFBhZ2VDb3VudDtfIUl0ZW1Db3VudDtfIURhdGFTb3VyY2VJdGVtQ291bnQ7RGF0YUtleXM7PjtsPGk8MT47aTwyPjtpPDI+O2w8Pjs+Pjs+Ozs7Ozs7Ozs7Oz47bDxpPDA+Oz47bDx0PDtsPGk8MT47aTwyPjs+O2w8dDw7bDxpPDA+O2k8MT47aTwyPjtpPDM+O2k8ND47aTw1Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDxSRklE5bCE6aKR6K+G5Yir5Y6f55CG5LiO5bqU55So6K++56iL6K6+6K6hOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzku7vmmZPojok7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDAuNTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w8MDEtMTg7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCZuYnNwXDs7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCZuYnNwXDs7Pj47Pjs7Pjs+Pjt0PDtsPGk8MD47aTwxPjtpPDI+O2k8Mz47aTw0PjtpPDU+Oz47bDx0PHA8cDxsPFRleHQ7PjtsPOS8oOaEn+e9keWOn+eQhuS4juW6lOeUqOivvueoi+iuvuiuoTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85rW35rabOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwwLjU7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDAxLTE2Oz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwmbmJzcFw7Oz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwmbmJzcFw7Oz4+Oz47Oz47Pj47Pj47Pj47dDxAMDxwPHA8bDxQYWdlQ291bnQ7XyFJdGVtQ291bnQ7XyFEYXRhU291cmNlSXRlbUNvdW50O0RhdGFLZXlzOz47bDxpPDE+O2k8MD47aTwwPjtsPD47Pj47Pjs7Ozs7Ozs7Ozs+Ozs+Oz4+Oz4+Oz7PS6XFHpp4qJNxobtvd2ICEm+B8A==',
            'xn' => '2017-2018',
            'xq' => '2',
            'nj' => '2016',
            'xy' => '96',
            'zy' => '9609',
            'kb' => '201696092018 - 201912016960901');
        $term = array_merge($default);
        $p = 1;
        empty($p) ? $p = 1 : $p = 0;
        $this->name = $this->name($this->viewstate);
        $curlArg = array(
            'url' => $url . $this->studentcode . "&xm=" . $this->name . '&gnmkdm=N121601',//. $this->studentcode . "&xm=" . $this->name,
            'method' => 'post',
            'data' => $term,
            'responseHeaders' => 0,
            'cookie' => $_SESSION['sessionId'],
            'referer' => jwsysUrl,
        );
        $temp = curl_request($curlArg);
        print_r($temp);
        $table = dom_xpath($temp, $query);
        //星期一第一节课从下标18开始，去掉前16组
        for ($i = 0; $i <= 16; $i++) {
            unset($table[$i]);
        }
        $begin = 17;//第一节课的表头
        for ($i = 1; $i <= count($table); $i++) {
            if (preg_match('/第\d*[02468]节/', $table[$begin][0]) || preg_match('/上午/', $table[$begin][0]) || preg_match('/下午/', $table[$begin][0]) || preg_match('/晚上/', $table[$begin][0]))
                unset($table[$begin]);
            $begin++;
        }
        $m = 0;
        $n = 1;//第几节课
        $schedule = array();
        foreach ($table as $x => $z) {
            if (preg_match('/第[13579]节/', $z[0])) {
                for ($i = 0; $i <= 7; $i++) {
                    if (isset($table[$x + $i + 1][0])) $schedule[$m + $i]['time'] = $i + 1 . '-' . $n;
                    if (!isset($table[$x + $i + 1][2])) $schedule[$m + $i]['course'] = 0;  //课程开设时间不存在，课程名称为0
                    else {
                        $schedule[$m + $i]['course'] = $table[$x + $i + 1][0];  //课程名称
                        $schedule[$m + $i]['room'] = $table[$x + $i + 1][6];    //上课教室
                        if (preg_match('/单/', $table[$x + $i + 1][2])) $schedule[$m + $i]['single'] = 1;
                        elseif (preg_match('/双/', $table[$x + $i + 1][2])) $schedule[$m + $i]['single'] = 2;
                    }
                    if (isset($table[$x + $i + 1][9 + $p])) {   //存在单双周课程
                        $schedule[$m + $i + 100]['time'] = $i + 1 . '-' . $n;
                        $schedule[$m + $i + 100]['course'] = $table[$x + $i + 1][9 + $p];
                        $schedule[$m + $i + 100]['room'] = $table[$x + $i + 1][15 + $p];
                        if (preg_match('/单/', $table[$x + $i + 1][11 + $p])) $schedule[$m + $i + 100]['single'] = 1;
                        elseif (preg_match('/双/', $table[$x + $i + 1][11 + $p])) $schedule[$m + $i + 100]['single'] = 2;
                    }
                }
                $m = $m + 7;
                $x = $x + 7;
                $n++;
            }
        }
        if (isset($schedule[35])) unset($schedule[35]);
        return array_values($schedule);
    }
}