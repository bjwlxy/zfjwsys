<?php
/**
 * Created by PhpStorm.
 * User: 锅岛霖懿
 * Date: 2018-10-07
 * Time: 21:57
 */

namespace zfjwsys\tools;

use zfjwsys\tools\CourseSnail;

class Course
{
    protected $xq;
    protected $xn;

    function __construct()
    {
        $year = date('Y');
        $month = date('n');
        if (2 <= $month && $month < 8) {
            $this->xq = 2;
            $this->xn = '"' . ($year - 1) . '-' . $year . '"';

        } else {
            $this->xq = 1;
            $this->xn = '"' . $year . '-' . ($year + 1) . '"';
        }
    }

    public function course_class($studentcode, $password, $grade)
    {
        $default = array(
            '__EVENTTARGET' => 'xq',
            '__EVENTARGUMENT' => '',
            '__VIEWSTATE' => 'dDwtMTQ0Mjk5MTgxMjt0PHA8bDx4c3p5ZG07PjtsPDk2MDk7Pj47bDxpPDE+Oz47bDx0PDtsPGk8MT47aTwzPjtpPDU+O2k8Nz47aTw5PjtpPDExPjtpPDEzPjtpPDE1PjtpPDE5PjtpPDIxPjtpPDIzPjtpPDI1Pjs+O2w8dDx0PHA8cDxsPERhdGFUZXh0RmllbGQ7RGF0YVZhbHVlRmllbGQ7PjtsPHhuO3huOz4+Oz47dDxpPDM+O0A8MjAxOC0yMDE5OzIwMTctMjAxODsyMDE2LTIwMTc7PjtAPDIwMTgtMjAxOTsyMDE3LTIwMTg7MjAxNi0yMDE3Oz4+O2w8aTwwPjs+Pjs7Pjt0PHQ8cDxwPGw8RGF0YVRleHRGaWVsZDtEYXRhVmFsdWVGaWVsZDs+O2w8eHE7eHE7Pj47Pjt0PGk8Mj47QDwxOzI7PjtAPDE7Mjs+PjtsPGk8MD47Pj47Oz47dDx0PHA8cDxsPERhdGFUZXh0RmllbGQ7RGF0YVZhbHVlRmllbGQ7VmlzaWJsZTs+O2w8eHhxO3h4cXY7bzxmPjs+Pjs+O3Q8aTwwPjtAPD47QDw+Pjs+Ozs+O3Q8dDxwPHA8bDxEYXRhVGV4dEZpZWxkO0RhdGFWYWx1ZUZpZWxkOz47bDxuajtuajs+Pjs+O3Q8aTw1PjtAPDIwMTg7MjAxNzsyMDE2OzIwMTU7MjAxNDs+O0A8MjAxODsyMDE3OzIwMTY7MjAxNTsyMDE0Oz4+O2w8aTwyPjs+Pjs7Pjt0PHQ8cDxwPGw8RGF0YVRleHRGaWVsZDtEYXRhVmFsdWVGaWVsZDs+O2w8eHltYzt4eWRtOz4+Oz47dDxpPDE2PjtAPOaUv+azleWtpumZojvmlZnogrLlrabpmaI75paH5a2m5LiO5paw6Ze75Lyg5pKt5a2m6ZmiO+WkluWbveivreWtpumZojvljoblj7LmlofljJbkuI7ml4XmuLjlrabpmaI757uP5rWO566h55CG5a2m6ZmiO+e+juacr+WtpumZojvpn7PkuZDlrabpmaI75pWw5a2m5LiO5L+h5oGv56eR5a2m5a2m6ZmiO+eJqeeQhuS4juWFieeUteaKgOacr+WtpumZojvljJblrabljJblt6XlrabpmaI75Zyw55CG5LiO546v5aKD5a2m6ZmiO+acuuaisOW3peeoi+WtpumZojvnlLXlrZDnlLXmsJTlt6XnqIvlrabpmaI76K6h566X5py65a2m6ZmiO+S9k+iCsuWtpumZojs+O0A8ODI7ODM7ODQ7ODU7ODY7ODc7ODg7ODk7OTA7OTE7OTI7OTM7OTQ7OTU7OTY7OTc7Pj47bDxpPDE0Pjs+Pjs7Pjt0PHQ8cDxwPGw8RGF0YVRleHRGaWVsZDtEYXRhVmFsdWVGaWVsZDs+O2w8enltYzt6eWRtOz4+Oz47dDxpPDExPjtAPOiuoeeul+acuuenkeWtpuS4juaKgOacrzvorqHnrpfmnLrlupTnlKjmioDmnK/vvIjpq5jogYzvvIk76K6h566X5py6572R57uc5oqA5pyv77yI6auY6IGM77yJO+iuoeeul+acuuWPiuW6lOeUqO+8iOmrmOiBjO+8iTvorqHnrpfmnLrnp5HlrabkuI7mioDmnK/vvIjkuJPljYfmnKzvvIk76L2v5Lu25bel56iLO+eJqeiBlOe9keW3peeoizvova/ku7blt6XnqIsoMTPniYgpO+eJqeiBlOe9keW3peeoiygxM+eJiCk76K6h566X5py656eR5a2m5LiO5oqA5pyvKDEz54mIKTtcZTs+O0A8OTYwMTs5NjAyOzk2MDM7OTYwNDs5NjA1Ozk2MDY7OTYwNzs5NjA4Ozk2MDk7OTYxMDtcZTs+PjtsPGk8OD47Pj47Oz47dDx0PHA8cDxsPERhdGFUZXh0RmllbGQ7RGF0YVZhbHVlRmllbGQ7PjtsPHRqa2JtYzt0amtiZG07Pj47Pjt0PGk8Mz47QDxcZTsyMDE257qn54mp6IGU572R5bel56iLMeePrTsyMDE257qn54mp6IGU572R5bel56iLMuePrTs+O0A8XGU7MjAxNjk2MDkyMDE4LTIwMTkxMjAxNjk2MDkwMTsyMDE2OTYwOTIwMTgtMjAxOTEyMDE2OTYwOTAyOz4+O2w8aTwxPjs+Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPFxlOz4+Oz47Oz47dDw7bDxpPDU+Oz47bDx0PEAwPDs7Ozs7Ozs7Ozs+Ozs+Oz4+O3Q8cDxwPGw8VGV4dDs+O2w8XGU7Pj47Pjs7Pjt0PEAwPHA8cDxsPFBhZ2VDb3VudDtfIUl0ZW1Db3VudDtfIURhdGFTb3VyY2VJdGVtQ291bnQ7RGF0YUtleXM7PjtsPGk8MT47aTwyPjtpPDI+O2w8Pjs+Pjs+Ozs7Ozs7Ozs7Oz47bDxpPDA+Oz47bDx0PDtsPGk8MT47aTwyPjs+O2w8dDw7bDxpPDA+O2k8MT47aTwyPjtpPDM+O2k8ND47aTw1Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDxSRklE5bCE6aKR6K+G5Yir5Y6f55CG5LiO5bqU55So6K++56iL6K6+6K6hOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzku7vmmZPojok7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDAuNTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w8MDEtMTg7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCZuYnNwXDs7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPCZuYnNwXDs7Pj47Pjs7Pjs+Pjt0PDtsPGk8MD47aTwxPjtpPDI+O2k8Mz47aTw0PjtpPDU+Oz47bDx0PHA8cDxsPFRleHQ7PjtsPOS8oOaEn+e9keWOn+eQhuS4juW6lOeUqOivvueoi+iuvuiuoTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85rW35rabOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwwLjU7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDAxLTE2Oz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwmbmJzcFw7Oz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwmbmJzcFw7Oz4+Oz47Oz47Pj47Pj47Pj47dDxAMDxwPHA8bDxQYWdlQ291bnQ7XyFJdGVtQ291bnQ7XyFEYXRhU291cmNlSXRlbUNvdW50O0RhdGFLZXlzOz47bDxpPDE+O2k8MD47aTwwPjtsPD47Pj47Pjs7Ozs7Ozs7Ozs+Ozs+Oz4+Oz4+Oz7PS6XFHpp4qJNxobtvd2ICEm+B8A==',
            'xn' => $this->xn,//$term['xn'],$this->xn;
            'xq' => $this->xq,
            'nj' => $grade,
            //'xy' => '96','zy' => '9609','kb' => '201696092018 - 201912016960901'
        );
        $term = array_merge($default);
        $class_course = new CourseSnail();
        $arr = $class_course->class_course($studentcode, $password, $term);
        return $arr;
    }

    public function course_personal($studentcode, $password)
    {
        $default = array(
            '__EVENTTARGET' => 'xqd',
            '__EVENTARGUMENT' => '',
            '__VIEWSTATE' => 'dDwxNTM4MTc2MTcwO3Q8O2w8aTwxPjs+O2w8dDw7bDxpPDE+O2k8Mj47aTw0PjtpPDc+O2k8OT47aTwxMT47aTwxMz47aTwxNT47aTwyMj47aTwyNj47aTwyOD47aTwzMD47aTwzND47aTwzNj47aTw0MD47PjtsPHQ8cDxwPGw8VGV4dDs+O2w8XGU7Pj47Pjs7Pjt0PHQ8cDxwPGw8RGF0YVRleHRGaWVsZDtEYXRhVmFsdWVGaWVsZDs+O2w8eG47eG47Pj47Pjt0PGk8Mz47QDwyMDE4LTIwMTk7MjAxNy0yMDE4OzIwMTYtMjAxNzs+O0A8MjAxOC0yMDE5OzIwMTctMjAxODsyMDE2LTIwMTc7Pj47bDxpPDE+Oz4+Ozs+O3Q8dDw7O2w8aTwwPjs+Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOWtpuWPt++8mjIwMTY5NjA5NDAyNTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85aeT5ZCN77ya6YOt5q2j6L6JOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDzlrabpmaLvvJrorqHnrpfmnLrlrabpmaI7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOS4k+S4mu+8mueJqeiBlOe9keW3peeoiygxM+eJiCk7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOihjOaUv+ePre+8mjIwMTbnuqfnianogZTnvZHlt6XnqIsx54+tOz4+Oz47Oz47dDw7bDxpPDE+O2k8Mz47PjtsPHQ8O2w8aTwwPjs+O2w8dDw7bDxpPDA+Oz47bDx0PEAwPDs7Ozs7Ozs7Ozs+Ozs+Oz4+Oz4+O3Q8O2w8aTwwPjs+O2w8dDw7bDxpPDA+Oz47bDx0PEAwPDs7Ozs7Ozs7Ozs+Ozs+Oz4+Oz4+Oz4+O3Q8O2w8aTwxPjs+O2w8dDxAMDw7Ozs7Ozs7Ozs7Pjs7Pjs+Pjt0PHA8bDxWaXNpYmxlOz47bDxvPGY+Oz4+O2w8aTwxPjs+O2w8dDxAMDw7Ozs7Ozs7Ozs7Pjs7Pjs+Pjt0PEAwPHA8cDxsPFBhZ2VDb3VudDtfIUl0ZW1Db3VudDtfIURhdGFTb3VyY2VJdGVtQ291bnQ7RGF0YUtleXM7PjtsPGk8MT47aTwwPjtpPDA+O2w8Pjs+Pjs+Ozs7Ozs7Ozs7Oz47Oz47dDw7bDxpPDA+Oz47bDx0PDtsPGk8MD47PjtsPHQ8QDA8cDxwPGw8UGFnZUNvdW50O18hSXRlbUNvdW50O18hRGF0YVNvdXJjZUl0ZW1Db3VudDtEYXRhS2V5czs+O2w8aTwxPjtpPDE+O2k8MT47bDw+Oz4+Oz47Ozs7Ozs7Ozs7PjtsPGk8MD47PjtsPHQ8O2w8aTwxPjs+O2w8dDw7bDxpPDA+O2k8MT47aTwyPjtpPDM+O2k8ND47aTw1PjtpPDY+Oz47bDx0PHA8cDxsPFRleHQ7PjtsPOaVsOaNrue7k+aehOivvueoi+iuvuiuoTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85p2O5bu65Y2TOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwwLjU7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDE3LTE3Oz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwmbmJzcFw7Oz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwmbmJzcFw7Oz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwmbmJzcFw7Oz4+Oz47Oz47Pj47Pj47Pj47Pj47Pj47dDxAMDxwPHA8bDxQYWdlQ291bnQ7XyFJdGVtQ291bnQ7XyFEYXRhU291cmNlSXRlbUNvdW50O0RhdGFLZXlzOz47bDxpPDE+O2k8MD47aTwwPjtsPD47Pj47Pjs7Ozs7Ozs7Ozs+Ozs+O3Q8O2w8aTwwPjs+O2w8dDw7bDxpPDA+Oz47bDx0PEAwPHA8cDxsPFBhZ2VDb3VudDtfIUl0ZW1Db3VudDtfIURhdGFTb3VyY2VJdGVtQ291bnQ7RGF0YUtleXM7PjtsPGk8MT47aTwzPjtpPDM+O2w8Pjs+Pjs+Ozs7Ozs7Ozs7Oz47bDxpPDA+Oz47bDx0PDtsPGk8MT47aTwyPjtpPDM+Oz47bDx0PDtsPGk8MD47aTwxPjtpPDI+O2k8Mz47aTw0Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDwyMDE3LTIwMTg7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDE7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOaooeaLn+eUteWtkOaKgOacr+WunumqjDs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85byg5bCP5aifOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwwLjU7Pj47Pjs7Pjs+Pjt0PDtsPGk8MD47aTwxPjtpPDI+O2k8Mz47aTw0Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDwyMDE3LTIwMTg7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDE7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOaVsOaNrue7k+aehOivvueoi+iuvuiuoTs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85p2O5bu65Y2TOz4+Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDwwLjU7Pj47Pjs7Pjs+Pjt0PDtsPGk8MD47aTwxPjtpPDI+O2k8Mz47aTw0Pjs+O2w8dDxwPHA8bDxUZXh0Oz47bDwyMDE3LTIwMTg7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDE7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOWkp+WtpueJqeeQhuWunumqjDs+Pjs+Ozs+O3Q8cDxwPGw8VGV4dDs+O2w85byg5YWD5bOwL+W4uOWwkeaihS/lhq/pnZI7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPDE7Pj47Pjs7Pjs+Pjs+Pjs+Pjs+Pjs+Pjs+Pjs+Pjs+hqo7RpHY9KAQKM+rykTGglSr/WI=',
            'xnd' => $this->xn,
            'xqd' => $this->xq,
        );
        $term = array_merge($default);
        $personal_course = new CourseSnail();
        $brr = $personal_course->personal_course($studentcode, $password, $term);
        return $brr;
    }

    public function course_all($studentcode, $password, $grade)
    {
        $arr1 = $this->course_class($studentcode, $password, $grade);
        $arr2 = $this->course_personal($studentcode, $password);
        $arr3 = $arr2;
        if (!empty($arr2)) {
            for ($i = 0; $i < count($arr2); $i++) {
                for ($j = 0; $j < count($arr1); $j++) {
                    if (empty(array_diff_assoc($arr2[$i], $arr1[$j]))) {
                        unset($arr3[$i]);
                    }
                }
            }
            array_push($arr1, $arr3[key($arr3)]);
        }
        return $arr1;
    }
}