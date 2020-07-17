# Verificación de email

  1. Dar alta en base
  
> Pero en usuEstado poner un 0 en tabla usuarios.    
> En otra tabla verificiones guardar el id de usuario y el token

  2. Enviar un email a ese usuario con un token    
  
> En ese mail enviar un link con un token de activación 
> El formato sería:

    url/verificar.php?id=token    
    
  3. Comparar ese token con el almacenado
  
> Debemos comparar el token almacenado con el que el usuario a verificar hizo click
> Entonces si coinciden: 

  4. Modificar el estado de usuario
  
> Cambiar usuEstado de 0 a 1

 