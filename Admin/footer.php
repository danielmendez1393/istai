				</div>
			</section>		
	    </aside> 	
<!-- Fin Cuerpo -->

<script>
function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("demo").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "&crud="+str, true);
  xhttp.send();
}
</script>


		<script >

                $(document).ready(function(){
                  $('ul.tabs').tabs('select_tab', 'tab_id');
                });     
                $(document).ready(function() {
                  $('select').material_select();
                });
                  $(document).ready(function() {
                    $('inptextarea#icon_prefix2').characterCounter();

                  });
                   $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 5, // Creates a dropdown of 15 years to control year
                    labelMonthNext: 'Mes próximo',
                    labelMonthPrev: 'Mes anterior',
                    labelMonthSelect: 'Selecciona un mes',
                    labelYearSelect: 'Selecciona un año',
                    monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                    weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],
                    weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
                    showWeekdaysShort: true,
                    today: 'Hoy',
                    clear: 'Limpiar',
                    close: 'Aceptar',
                    formatSubmit: 'dd/mm/yyyy'
                  });
                    $(document).ready(function(){ 
                        $('#MosOcu').on('click',function(){
                        $('#uno').toggle();
                       });
                    });
                    function mostrar(){
                        document.getElementById('uno').style.display='block';
                    }
                    function ocultar(){
                        document.getElementById('uno').style.display='none';
                    }
                   </script>
                   <script >
                    $(document).ready(function(){ 
                        $('#MosOcu1').on('click',function(){
                        $('#dos').toggle();
                       });
                    });
                    function mostrar(){
                        document.getElementById('dos').style.display='block';

                       /* document.getElementById('uno').style.display='none';
                        document.getElementById('tres').style.display='none';
                        document.getElementById('cuatro').style.display='none';
                        document.getElementById('cinco').style.display='none';
                        document.getElementById('seis').style.display='none';
                        document.getElementById('siete').style.display='none';*/
                    }
                    function ocultar(){
                        document.getElementById('dos').style.display='none';

                    }
                   </script>
                   <script >
                    $(document).ready(function(){ 
                        $('#MosOcu2').on('click',function(){
                        $('#tres').toggle();
                       });
                    });
                    function mostrar(){
                        document.getElementById('tres').style.display='block';
                    }
                    function ocultar(){
                        document.getElementById('tres').style.display='none';
                    }
                   </script>
                   <script >
                    $(document).ready(function(){ 
                        $('#MosOcu3').on('click',function(){
                        $('#cuatro').toggle();
                       });
                    });
                    function mostrar(){
                        document.getElementById('cuatro').style.display='block';
                    }
                    function ocultar(){
                        document.getElementById('cuatro').style.display='none';
                    }
                   </script>
                   <script >
                    $(document).ready(function(){ 
                        $('#MosOcu4').on('click',function(){
                        $('#cinco').toggle();
                       });
                    });
                    function mostrar(){
                        document.getElementById('cinco').style.display='block';
                    }
                    function ocultar(){
                        document.getElementById('cinco').style.display='none';
                    }
                   </script>
                   <script >
                    $(document).ready(function(){ 
                        $('#MosOcu5').on('click',function(){
                        $('#seis').toggle();
                       });
                    });
                    function mostrar(){
                        document.getElementById('seis').style.display='block';
                    }
                    function ocultar(){
                        document.getElementById('seis').style.display='none';
                    }
                   </script><script >
                    $(document).ready(function(){ 
                        $('#MosOcu6').on('click',function(){
                        $('#siete').toggle();
                       });
                    });
                    function mostrar(){
                        document.getElementById('siete').style.display='block';
                    }
                    function ocultar(){
                        document.getElementById('siete').style.display='none';
                    }
                   </script>

                   <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
                    <a class="btn-floating btn-large red">
                      <i class="large material-icons">mode_edit</i>
                    </a>
                    <ul>
                      <li><a class="btn-floating red" href="paneladm.php?p=inicio"><i class="material-icons">home</i></a></li>
                      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                    </ul>
                  </div>

</body>
</html>