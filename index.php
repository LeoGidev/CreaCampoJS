<head>
<?php
echo "<head> <meta charset='utf-8'> <meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>";
echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>";
echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>";

echo "<script src='https://kit.fontawesome.com/4541e18ef9.js' crossorigin='anonymous'></script>";
echo "</head>";
  ?>
       <script>
a = 1;
function addTarea(){
        a++;
        var div = document.createElement('div');
        div.setAttribute('class', 'form');
        
            div.innerHTML = '<input class="form-control" name="subt_'+a+'" type="text" placeholder="subtarea" required/>';
        
        document.getElementById('tareas').appendChild(div);document.getElementById('tareas').appendChild(div);
}

function delTarea() {
    if (a > 1) {
        var divs = document.getElementById('tareas').getElementsByClassName('form');
        var lastDiv = divs[divs.length - 1];
        lastDiv.parentNode.removeChild(lastDiv);
        a--;
    }
}


  

</script>
</head>
<body>
<div id="tareas" class="border-1 rounded p-3">
        <span> Agregar sub-tarea </span>
    <input type="button" class="btn btn-success" id="add_tarea()" onClick="addTarea()" value="+" />
    <input type="button" class="btn btn-danger" id="eliminar" onClick="delTarea()" value="-" />
    <!--<input class="form-control" name="subt_1" type="text" placeholder='subtarea'/>-->
    
    </div>
</body>
