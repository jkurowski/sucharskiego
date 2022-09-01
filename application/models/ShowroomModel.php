<?php
class Model_ShowroomModel extends Zend_Db_Table_Abstract
{
    protected $_name = 'showrooms';
    protected $_primary = 'id';

    const IMG_WIDTH = 900;
    const IMG_HEIGHT = 660;
}