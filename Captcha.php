<?php
class Captcha {
	private $codeNum;
	//验证码位数
	private $width;
	//验证码图片宽度
	private $height;
	//验证码图片高度
	private $img;
	//图像资源句柄
	private $lineFlag;
	//是否生成干扰线条
	private $piexFlag;
	//是否生成干扰点
	private $fontSize;
	//字体大小
	private $code;
	//验证码字符
	private $string;
	//生成验证码的字符集
	private $font;
	//字体

    //构造方法
	function __construct($codeNum=4,$height = 50,$width = 150,$fontSize=20,$lineFlag=true,$piexFlag=true){
		$this->string='qwertyupmkjnhbgvfcdsxa123456789';//去除相似的字符
        $this->codeNum=$codeNum;
        $this->height=$height;
        $this->width=$width;
        $this->lineFlag=$lineFlag;
        $this->piexFlag=$piexFlag;
        $this->font=dirname(__FILE__).'/font/consola.ttf';
        $this->fontSize=$fontSize;
	}


	public function createImage(){
        $this->img = imagecreate($this->width, $this->height);
        imagecolorallocate($this->img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));//(图片资源,R,G,B)
    }//渲染背景图片+创建验证码

    public function createCode(){
	    $strlen=strlen($this->string)-1;
	    for ($i=0;$i<$this->codeNum;$i++){
	        $this->code.=$this->string[mt_rand(0,$strlen)];
            //从字符集中随机取出四个字符拼接
        }

        $_SESSION['code']=$this->code;
        //加入 session 中
        $diff = $this->width/$this->codeNum;
        //计算每个字符的间距
        for($i=0;$i<$this->codeNum;$i++){
            $txtColor=imagecolorallocate($this->img,mt_rand(100,255),mt_rand(100,255),mt_rand(100,255));
            //把图像写入到img里
            imagettftext($this->img,$this->fontSize,mt_rand(-35,35),$diff*$i+mt_rand(-4,6),mt_rand(20,$this->height-5),$txtColor,$this->font,$this->code[$i]);
            //http://blog.csdn.net/smstong/article/details/43955705
        }
    }
    //生成验证码
    public function createLines(){
        for ($i=0;$i<=5;$i++){
            $color=imagecolorallocate($this->img,mt_rand(0,155),mt_rand(0,155),mt_rand(0,155));
            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$color);
            //绘出干扰线
        }
    }

    public function createPiex(){
        for ($i=0; $i < 100; $i++) {
            $color = imagecolorallocate($this->img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
            imagesetpixel($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),$color);
            //创建干扰点
        }
    }

    public function show(){
        $this->createImage();
        $this->createCode();
        if($this->lineFlag){
            $this->createLines();
        }//是否创建干扰线
        if ($this->piexFlag){
            $this->createPiex();
        }//是否创建干扰点
        header('Content-type:image/png');//请求页面的内容是png格式的图像
        imagepng($this->img);//以 PNG 格式将图像输出到浏览器或文件
        imagedestroy($this->img);//销毁一图像
    }
    public function getCode(){
        return $this->code;
    }
}
session_start(); //开启session
$captcha = new Captcha();    //实例化验证码类(可自定义参数)
$captcha->show();    //调用输出