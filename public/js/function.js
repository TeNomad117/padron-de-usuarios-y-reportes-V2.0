function comprobarext(formulario, archivo) {
   extensiones_permitidas = new Array(".txt");
   mierror = "";
   if (!archivo) {
       mierror = "No has seleccionado ningún archivo";
       window.location='/medicionl';
   }else{
      extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
      permitida = false;
      for (var i = 0; i < extensiones_permitidas.length; i++) {
         if (extensiones_permitidas[i] == extension) {
         permitida = true;
         break;
         }
      }
      if (!permitida) {
         mierror = "Comprueba la extensión del archivo. \nSólo se pueden subir archivos con extensiones: " + extensiones_permitidas.join();
         window.event.returnValue = false; document.location.href = '/medicionl';
         
       }else{
         //alert ("Todo correcto.");
         formulario.submit();
         return 1;
       }
   }
   //si estoy aqui es que no se ha podido submitir
   alert (mierror);
   return 0;
}

