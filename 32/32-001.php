<html>
    <head><title>フレームのよみだし実験</title></head>
    <body>
        <iframe name="iframe1" width="300" height="80" src="http://localhost/AnzenWebappTukurikata/32/32-002.php">
        </iframe><br>
        <input type="button" onclick="go()" value="ぱすわーど-">
        <script>
            function go(){
                try{
                    var x = iframe1.document.form1.passwd.value;
                    document.getElementById('out').textContent = x;
                } catch(e){
                    alert(e.message);
                }
            }
        </script>
        <span id="out"></span>
    </body>