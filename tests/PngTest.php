<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace tests;

use think\Image;

class PngTest extends TestCase
{
    public function testPng()
    {
        $save = TEST_PATH . 'tmp/croppng.png';

        $image    = Image::open($this->getJpeg());
        $width = intval(0.8 * $image->width());
        $height = intval(0.8 * $image->height());

        $image->crop($width, $height, 0, 0, $width, $height)->save($save);

        $this->assertEquals($width, $image->width());
        $this->assertEquals($height, $image->height());

        $file = new \SplFileInfo($save);
        $this->assertTrue($file->isFile());
    }
}
