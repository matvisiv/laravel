@echo off   

rem Ваш путь к repository !!!!!!!!!!!!   
set mydrive=C:\
set mypath=OpenServer\domains\laravel
 
rem Проверяем => путь должен существовать 
if not exist %mydrive%%mypath% ( 
echo Error! Folder %mydrive%%mypath% not exist 

rem ждем нажатие любой клавиши чтобы выйти 
pause
echo Press ENTER to EXIT 
exit 
) 

git config --global user.name "matvijko" 
git config --global user.email matvijko94@ukr.net 

rem устанавливаем текущий путь    
cd %mydrive%    
cd %mypath%    

rem просканировать новые файлы 
git add * 

rem выложить новые файлы 
git commit -m "added new file index.js"

rem выложить новые файлы на удаленный репозитарий 
git push origin master 