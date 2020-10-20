#Git

```shell
git reset --hard
git pull # Recupere le contenu d'un depot git sans touché a ce qui a ete 			ajouté (et qui ne fait pas partie du projet)

git config --global user.name "CrabThug"
git config --global user.email johndoe@example.com
```





creer un depôt sur le site de github 

```shell
cd project
git init
git add . 
git commit -m ':tada: Initial commit'
git remote add origin https://github.com/damienmillet/project.git
#or if hav already
git remote set-url origin https://github.com/damienmillet/project.git
git push -u origin master
```



supprimer commit :

1 - annuler le dernier commit

2 - git push -f

