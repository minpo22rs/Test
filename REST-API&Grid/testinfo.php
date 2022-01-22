<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REST-API & GRID</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="9.png" alt="" />
        </div>
        <ul>
            <li id="open-api" class="show-color"><a href="#">REST-API</a></li>
            <li id="open-grid"><a href="#">Grid</a></li>
        </ul>
    </nav>

    <header>

        <h1>Gird & REST-API</h1>
    </header>

    <div class="grid-container" id="grid">
        <div class="grid">
            <div class="grid-header">
            <h1>Grid</h1>
            </div>
            <div class="grid-content">
                <div class="container_1">
                   
                    <div class="grid_1">
                        <div class="con_1 content_1"></div>

                        <div class="con_2 content_1"></div>

                        <div class="con_3 content_1"></div>
                        <div class="con_4 content_1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="api-container" id="api">
        <div class="api">
            <div class="api-header">
                <h1>REST-API</h1>
                <button type="button" onclick="loadDoc()" class="btn-api">Show</button>

            </div>
            <div class="api-content">
                <div class="container_1">
                    
                    <table class="table-api">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td width="400px">Image</td>
                                <td>Name</td>
                                <td>Price</td>
                            </tr>
                        </thead>
                        <tbody id="info"></tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
   


    <script src="script.js"></script>

</body>
<script>

function loadDoc() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            console.log(data);
            for (let i = 0; i < data.length; i++) {
                document.getElementById('info').innerHTML += `
                   <tr>
                      <td>${data[i].id}</td>
                      <td>
                             <img src="${data[i].image}"  width="100px"alt="">
                      </td>
                      <td>${data[i].name}</td>
                      <td>${data[i].price}</td>
                   
                   </tr>
                
                `;
            }
        }
    }
    document.getElementById('info').innerHTML = '';
    xhttp.open("GET", 'index.php', true); //ส่ง GET ไปที่ไฟล์ index.php 
    xhttp.send();
}
</script>

</html>