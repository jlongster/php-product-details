<?php
    require_once dirname(__FILE__).'/productHistory.class.php';

    /**
     * Dates of release for certain Firefox versions, mostly obtained from
     * http://en.wikipedia.org/wiki/History_of_Mozilla_Firefox#Release_history
     */
    class firefoxHistory extends productHistory {
        // Major releases
        var $major_releases = array(
                '1.0' => '2004-11-09',
                '1.5' => '2005-11-29',
                '2.0' => '2006-10-24',
                '3.0' => '2008-06-17',
                '3.5' => '2009-06-30',
                '3.6' => '2010-01-21'
            );

        // Security and stability releases
        var $stability_releases = array(
                '1.0.1'    => '2005-02-24',
                '1.0.2'    => '2005-03-23',
                '1.0.3'    => '2005-04-15',
                '1.0.4'    => '2005-05-11',
                '1.0.5'    => '2005-07-12',
                '1.0.6'    => '2005-07-19',
                '1.0.7'    => '2005-09-20',
                '1.0.8'    => '2006-04-13',
                '1.5.0.1'  => '2006-02-01',
                '1.5.0.2'  => '2006-04-13',
                '1.5.0.3'  => '2006-05-02',
                '1.5.0.4'  => '2006-06-01',
                '1.5.0.5'  => '2006-07-26',
                '1.5.0.6'  => '2006-08-02',
                '1.5.0.7'  => '2006-09-14',
                '1.5.0.8'  => '2006-11-07',
                '1.5.0.9'  => '2006-12-19',
                '1.5.0.10' => '2007-02-23',
                '1.5.0.11' => '2007-03-20',
                '1.5.0.12' => '2007-05-30',
                '2.0.0.1'  => '2006-12-19',
                '2.0.0.2'  => '2007-02-23',
                '2.0.0.3'  => '2007-03-20',
                '2.0.0.4'  => '2007-05-30',
                '2.0.0.5'  => '2007-07-17',
                '2.0.0.6'  => '2007-07-30',
                '2.0.0.7'  => '2007-09-18',
                '2.0.0.8'  => '2007-10-18',
                '2.0.0.9'  => '2007-11-01',
                '2.0.0.10' => '2007-11-26',
                '2.0.0.11' => '2007-11-30',
                '2.0.0.12' => '2008-02-07',
                '2.0.0.13' => '2008-03-25',
                '2.0.0.14' => '2008-04-16',
                '2.0.0.15' => '2008-07-01',
                '2.0.0.16' => '2008-07-15',
                '2.0.0.17' => '2008-09-23',
                '2.0.0.18' => '2008-11-12',
                '2.0.0.19' => '2008-12-16',
                '2.0.0.20' => '2008-12-18',
                '3.0.1'    => '2008-07-16',
                '3.0.2'    => '2008-09-23',
                '3.0.3'    => '2008-09-26',
                '3.0.4'    => '2008-11-12',
                '3.0.5'    => '2008-12-16',
                '3.0.6'    => '2009-02-03',
                '3.0.7'    => '2009-03-04',
                '3.0.8'    => '2009-03-27',
                '3.0.9'    => '2009-04-21',
                '3.0.10'   => '2009-04-27',
                '3.0.11'   => '2009-06-11',
                '3.0.12'   => '2009-07-21',
                '3.0.13'   => '2009-08-03',
                '3.0.14'   => '2009-09-09',
                '3.0.15'   => '2009-10-27',
                '3.0.16'   => '2009-12-15',
                '3.0.17'   => '2010-01-05',
                '3.0.18'   => '2010-02-17',
                '3.0.19'   => '2010-03-30',
                '3.5.1'    => '2009-07-17',
                '3.5.2'    => '2009-08-03',
                '3.5.3'    => '2009-09-09',
                '3.5.4'    => '2009-10-27',
                '3.5.5'    => '2009-11-05',
                '3.5.6'    => '2009-12-15',
                '3.5.7'    => '2010-01-05',
                '3.5.8'    => '2010-02-17',
                '3.5.9'    => '2010-03-30',
                '3.5.10'   => '2010-06-22',
                '3.5.11'   => '2010-07-20',
                '3.5.12'   => '2010-09-07',
                '3.5.13'   => '2010-09-15',
                '3.5.14'   => '2010-10-19',
                '3.5.15'   => '2010-10-27',
                '3.6.16'   => '2010-12-09',
                '3.6.2'    => '2010-03-22',
                '3.6.3'    => '2010-04-01',
                '3.6.4'    => '2010-06-22',
                '3.6.6'    => '2010-06-26',
                '3.6.7'    => '2010-07-20',
                '3.6.8'    => '2010-07-23',
                '3.6.9'    => '2010-09-07',
                '3.6.10'   => '2010-09-15',
                '3.6.11'   => '2010-10-19',
                '3.6.12'   => '2010-10-27',
                '3.6.13'   => '2010-12-09',
            );

        // Development releases - betas and release candidates only
        var $development_releases = array(
                '1.0rc1' => '2004-10-27',
                '1.0rc2' => '2004-11-03',
                '1.5rc1' => '2005-11-01',
                '1.5rc2' => '2005-11-10',
                '1.5rc3' => '2005-11-17',
                '2.0b1'  => '2006-07-12',
                '2.0b2'  => '2006-08-31',
                '2.0rc1' => '2006-09-26',
                '2.0rc2' => '2006-10-06',
                '2.0rc3' => '2007-10-16',
                '3.0b1'  => '2007-11-19',
                '3.0b2'  => '2007-12-18',
                '3.0b3'  => '2008-02-12',
                '3.0b4'  => '2008-03-10',
                '3.0b5'  => '2008-04-02',
                '3.0rc1' => '2008-05-16',
                '3.0rc2' => '2008-06-03',
                '3.1b1'  => '2008-08-14',
                '3.1b2'  => '2008-12-08',
                '3.1b3'  => '2009-03-12',
                '3.5b4'  => '2009-04-27',
                '3.5rc2' => '2009-06-19',
                '3.5rc3' => '2009-06-24',
                /* Missing some versions here */
                '3.6b1' => '2009-10-30',
                '3.6b2' => '2009-11-10',
                '3.6b3' => '2009-11-17',
                '3.6b4' => '2009-11-26',
                '3.6b5' => '2009-12-17',
                '3.6rc1' => '2010-01-08',
                '3.6rc2' => '2010-01-17',
                '3.6.3plugin1' => '2010-04-08',
                '3.6.4build1' => '2010-04-20',
                '3.6.4build3' => '2010-05-04',
                '3.6.4build4' => '2010-05-14',
                '3.6.4build5' => '2010-05-26',
                '3.6.4build6' => '2010-05-28',
                '3.6.4build7' => '2010-06-14',
                '3.6.7build1' => '2010-07-02',
                '4.0b1' => '2010-07-06',
                '4.0b2' => '2010-07-27',
                '4.0b3' => '2010-08-11',
                '4.0b4' => '2010-08-24',
                '4.0b5' => '2010-09-07',
                '4.0b6' => '2010-09-14',
                '4.0b7' => '2010-11-10',
                '4.0b8' => '2010-12-22',
                '4.0b9' => '2011-01-14',
            );
    }

?>
