<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>booksalon</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <style type="text/css">
            h1{
                width: 100%;
                text-align: center;
            }
            .part_1{
                position: absolute;
                width: 700px;
                height: 100vh;
                border: 2px solid lightgray;
            }
            .book{
                position: relative;
                width: 150px;
                height: 200px;
                float: left;
                border: 2px solid pink;
                padding-top: 40px;
                text-align: center;
                font-size: 20px;
                margin: 10px;
            }
            .aaa{
                text-decoration: none;
                cursor: pointer;

            }
            .booki{
                position: absolute;
                top: 115px;
                left: 21px;
            }
            .td1,.td4{
                width: 30px;
            }
            .td4btn{
                background-color: pink;
            }
            .td2{
                width: 20px;
            }
            .td3{
                width: 300px;
            }
            .part_2{
                position: absolute;
                left: 720px;
                width: 500px;
                height: 100vh;
                border: 2px solid lightgray;
            }
            td{
                text-align: center;
            }
            .bar{
                position: fixed;
                width: 100%;
                /*border: 1px solid red;*/
            }
            .bartton{
                float: right;
                margin-right: 100px;
            }
        </style>
    </head>
    <body>
        <div class="bar">
            <div class="bartton">
                <button>＋ 新增書目</button>
                <button>＋ 註冊帳號</button>
            </div>
        </div>
        <h1>booksalon</h1>
        <div class="part_1">
            <div class="book_all">
            </div>
        </div>
        <div class="part_2">
            <table class="user_all">
                <tr>
                    <td class="td1">who</td>
                    <td class="td2">id</td>
                    <td class="td3">會員名稱</td>
                    <td class="td4"><button class="td4btn">刪除</button></td>
                </tr>
            </table>

        </div>


    </body>
    <script type="text/javascript">

        var deleteWho = 0;    


        $(function(){
            var subUrl = 'http://127.0.0.1:8080';

            //              //
            //              //
            //     book     //
            //              //
            //              //


            var book_all = $('.book_all');
            $.ajax({
                url: subUrl+'/api/getBook',
                type: 'GET'
            })
            .done(function(res){
                // console.log(res.status);
                for(var i=0; i<res.status.length ; i++){
                    var div = document.createElement('div');
                    div.className = 'book';
                    div.innerHTML = `
                        <div id="`+res.status[i].id+`" class="aaa" >
                            <div>`+res.status[i].name+`</div>
                            <br>
                            <br>
                            <img class="booki" src="https://unsplash.it/`+(100+i)+`" alt="" />
                        </div>
                    `;

                    div.id = 'book_'+res.status[i].id;
                    $(div).appendTo(book_all);
                }
                
                $('.aaa').on('click',function(){

                    if ( user_id != 0 ) {

                        window.location.href = './booksalon/addArc?id='+ user_id+'&book='+this.id;
                    }else{
                        alert('要選擇使用帳號。');
                    }
                });

            })
            .fail(function(res){
                alert('Fuck');
            });
            //              //
            //              //
            //     user     //
            //              //
            //              //

            var user_id = 0;

            var user_all = $('.user_all');
            $.ajax({
                url: subUrl+'/api/getUser',
                type: 'GET'
            })
            .done(function(res){
                // console.log(res);
                for(var i=0; i<res.status.length ; i++){
                    var tr = document.createElement('tr');
                    tr.innerHTML = `
                            <td class="td1"><input class="radioWho" type="radio" name="123" value="`+res.status[i].id+`"></td>
                            <td class="td2">`+res.status[i].id+`</td>
                            <td class="td3">`+res.status[i].name+`</td>
                            <td class="td4"><input  type="radio" name="456" class="deleteWho" value="`+res.status[i].id+`"></td>
                    `;
                    tr.id = 'user_'+res.status[i].id;
                    $(user_all).append(tr);
                }
                $('.radioWho').change(function(){
                    user_id = this.value;
                });
                $('.deleteWho').change(function(){
                    deleteWho = this.value;
                });


            })
            .fail(function(res){
                alert('Fuck');
            });
            $('.td4btn').on('click',function(){
                if ( deleteWho == 0 ) {
                    alert('choose user to delete');
                }else{
                    $('#user_'+deleteWho).remove();
                    $.ajax({
                        url: subUrl+'/api/users/'+deleteWho,
                        type: 'DELETE'
                    })   
                    .fail(function(res){
                        console.log(res);
                    })
                    .fail(function(res){
                        console.log(res);
                    });
                }
            });
            


        });
        
    </script>
</html>
