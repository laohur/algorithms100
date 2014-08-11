<?php
@header('Content-type:text/html;charset=UTF-8');

/*生成服务端密码,即所谓的加盐
用法$server_password=server_password()*/

function server_passsword($ip)
{
    $trim=trim($ip,"\.");
    $substr=substr($trim,-8);
    $server_password=crypt($substr,CRYPT_SHA512);
    return
        $server_password;
}

function newPassword($userpassword)
{
    crypt(($userpasword.serverpassword()),CRYPT_SHA512);

}

function verifyPassword($inputPassword,$password)
{
    $password==newPassword($inputPassword,$sever_password);
    if(db("user","select","password","{$input}={$password}"))
        return 1;
    else
        return 0;
}

function exists($a,$b)
{
    if(db("user","count",'','',$a.$b,))
        return 1;
    else 
        return 0;
}

function isLogin()
{
    if(isset($_COOKIE['userid']) && !empty($_COOKIE['userid']) && isset($_COOKIE['username']) && !empty($_COOKIE['username']) )
    {
        if(isset($_COOKIE['IP']) && !empty($_COOKIE['IP']) && $_COOKIE['IP']=getIP() )
        {return 1;}
        else{
            if($isIPverify)
            {
                if(db("user","select","id","{$_COOKIE['id']=id} and {getIP()}=ipv6","rows"))
                    return 1;
                else
                    return 0;
            }else{
                return 0;
            }

        }else{
        return 0;
    }
}

function verifyCookie_id_name(){
	if(exists($_COOKIE['userid']) && exists($_COOKIE['username']))
		return select('user','userid',"{$_COOKIE['userid']}={$_COOKIE['username']}",'rows')
	else
		return 0;
}

function login()
{
    setcookie('IP',getIP(),time()+24*3600);
    setcookie('userid',$userid=global $userid,time()+24*3600);
    setcookie('username',$username=golbal $username,time()+24*3600);
    $_GLOBAL['login']=1;


}
function logout()
{
    setcookie('userid',null);
    sercookie('username',null)
}

?>