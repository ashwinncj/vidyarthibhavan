<?php ?>

<html
    <header>

        <script>
            function toggle()
            {
                var e = document.getElementById('radelHeaderMenu');
                if (e.style.display == 'block')
                    e.style.display = 'none';
                else
                    e.style.display = 'block';
            }

        </script>
        <style>

            body.radel{
                background-image: url('img/bck-op.jpg');
            }
            body.white{
                background-color: white;
            }
            ul.radelUser {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;

            }

            li.radelUser {
                float: left;
            }

            li.radelUser a {
                color: white;
                text-align: center;
                padding: 10px;
                text-decoration: none;
            }

            li.radelUser a:hover {
                background-color: gray;
            }
            .radelCustomHeader
            {
                
            }

            @media(min-width:600px)
            {
                div.radel{
                    left:10px;
                    top: 5px;
                }
                .radelCustomHeader{
                    position: fixed;
                    top:0px;
                    height: 30px;
                    z-index: 1;
                    background-color: black;
                    opacity: 0.8;
                    width: 100%;
                    margin-bottom: 10px;
                    color: white;
                    padding-right: 10px;  
                    padding-top: 5px;
                }
                ul.radel {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;

                }

                li.radel {
                    float: left;
                }

                li.radel a {
                    color: white;
                    text-align: center;
                    padding: 10px;
                    text-decoration: none;
                }

                li.radel a:hover {
                    background-color: gray;
                }
                .radel-visible
                {
                    display: none; 
                }
            }
            @media(max-width:600px)
            {
                div.radel{
                    left:10px;
                    top:30px;
                }
                .radelCustomHeader{
                    position: fixed;
                    top:0px;
                    height: 30px;
                    z-index: 1;
                    background-color: black;
                    opacity: 0.8;
                    width: 100%;
                    margin-bottom: 10px;
                    color: white;
                    padding-right: 10px;  
                    padding-top: 5px;
                }
                ul.radel {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: black;
                    opacity: 0.8;
                    display: none;
                    font-size:20px;


                }

                li.radel {
                    padding: 10px;

                }

                li.radel a {
                    color: white;
                    text-align: center;
                    text-decoration: none;
                }

                li.radel a:hover {
                    background-color: gray;
                }
                .radel-visible
                {
                    display: inline;
                    cursor:pointer;
                }
                a.radel-visible:hover {
                }
            }
        </style>
        <div class="radelCustomHeader">
            <div style="position: absolute; top:5px;right: 10px">
                <ul class="radelUser">
                    <li class="radelUser">Welcome <?php echo $name . "  | "; ?> </li>
                    <li class="radelUser" style="background-color:red"><a href="logout.php">Logout</a></li>
                </ul></div>


            <div class="radel" style="position: absolute; ">
                <ul id="radelHeaderMenu" class="radel">
                    <li class="radel"><a href="index.php">HOME</a></li>
                    <li class="radel"> <a href="search.php">SEARCH</a></li>
                    <li class="radel"><a href="reserve.php">RESERVE</a></li>
                    <li class="radel"><a href="queuestatus.php">QUEUE STATUS</a></li>

                </ul>
            </div>
            <div style="position: absolute; top: 5px; left: 10px">
                <a class="radel-visible"  onclick="toggle()"><img  src="img/radelMenu.jpg" style="width:20px" ></a>
            </div>
        </div>

    </header>

</html>

