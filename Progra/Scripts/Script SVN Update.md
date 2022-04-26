#bat #svn #tortoise #jean

----
# SVN Update

```bat
@echo off

title SVN Update - JEAN PAUL

  

echo UPDATING SVN SAEX

TortoiseProc.exe /command:update /path:"C:\Users\Usuario\Desktop\SVN_SAEX\" /closeonend

  

echo UPDATING SVN PORTAL EVENTOS - DESARROLLO

TortoiseProc.exe /command:update /path:"C:\Users\Usuario\Desktop\SVN_PORTALEVENTOS_UNIVERSIS\DESARROLLO\" /closeonend

  

echo UPDATING SVN PORTAL EVENTOS - PRODUCCION

TortoiseProc.exe /command:update /path:"C:\Users\Usuario\Desktop\SVN_PORTALEVENTOS_UNIVERSIS\PRODUCCION\" /closeonend

  

echo UPDATING SVN PORTAL EVENTOS - TESTING

TortoiseProc.exe /command:update /path:"C:\Users\Usuario\Desktop\SVN_PORTALEVENTOS_UNIVERSIS\TESTING\" /closeonend

  

echo UPDATING SVN FSCU - DESARROLLO

TortoiseProc.exe /command:update /path:"C:\Users\Usuario\Desktop\SVN_FSCU\DESARROLLO\" /closeonend

  

echo UPDATING SVN FSCU - TESTING

TortoiseProc.exe /command:update /path:"C:\Users\Usuario\Desktop\SVN_FSCU\TESTING\" /closeonend

  

echo UPDATING UNIVERSIS - DESARROLLO

TortoiseProc.exe /command:update /path:"C:\Users\Usuario\Desktop\DESARROLLO\" /closeonend

  

echo UPDATING UNIVERSIS - TESTING

TortoiseProc.exe /command:update /path:"C:\Users\Usuario\Desktop\SVN UNIVERSIS TESTING\" /closeonend

  

@echo.

@echo.

echo WENA WENA MI GENTE - ACTUALIZACION FINALIZADA

@echo.

pause
```