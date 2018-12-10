<？php

名前空間 App \ Http \ Controllers ;

 Illuminate \ Http \ Requestを使用します。

 App \ Itemを使用します。

クラス WelcomeController  extends  Controller
{
    / **
     *リソースのリストを表示します。
     *
     * @return \ Illuminate \ Http \ Response
     * / 
    public  function  index（）
    {
        ビューを返す（' ようこそ'）;
    }
}