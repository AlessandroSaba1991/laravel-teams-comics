# Git Branch

# git globale e non locale fino ad ora COME LAVORARE IN GIT
una volta creata la repo
```
settings -> collaborators -> Add people
```
_______________
## chi è stato aggiunto riceve una mail
e deve cliccare su
```
cliccare su -view invitation e poi cliccare su -accept invitation
```
_______________
## ora bisogna clonare la repo ( per gli aiutanti )

```
cliccare su Code e copiare il link 
link esempio:
https://github.com/GianlucaGiovannini/htmlcss-dropbox.git
```
_______________
## su vs code fare Clone Repository

```
e copiare il link e poi aprirla
```
_______________
## poi fare nel terminale

```
composer i
```
_______________
## modificare il file.env.example

```
fare una copia del file env.example e rinominarlo .env

```
ora la riga 3 avrà la voce App_key e sarà vuota quindi fare nel terminale
```
php artisan key:generate
```
_______________
## ora si installa le dipendenze npm

```
npm i
npm i bootstrap
ed ora si può fare : php artisan serve
```
_______________
## ora il main deve creare le Issues
andare sulla repo e cliccare su Issues
```
e creare una o più New issue
```
_______________
## ora un aiutante va nella repo e clicca su Issues
decide di assegnarsi una task quindi clicca su di una Issue e poi:

```
sulla destra c'è assignees e assegnarsi la task

e sotto write  scrive un commento tipo ci lavoro io
```

dopo di che dve creare una nuova branch su VScode

_______________
## Creare una nuova branch
- git branch 1-nome-feature (comando terminale)
Specificare il numero della issue che si sta svolgendo 
Ex: issue Create PageController => git branch 1-Create-PageController

## Spostarsi sulla branch creata
- git checkout 1-nome-feature
ora potete lavorare nella branch

## ora si va nella zona commit
si aggiunge le modifiche all'area staging e ci copiamo il titolo della Issues

```
si aggiunge le modifiche all'area staging e ci copiamo il titolo della Issues e ci si scrive 
'titolo' close #1

e si committa e si fa anche

PUBLISH BRANCH
```
_______________
## poi si va sulla repo, su code e appare il pulsante pull request

```
dopo di che cliccare - btn Create pull request  
```

_______________
## ora il Main ( proprietario ) deve fare la code review 
andare nella repo e avremo nella voce Pull request il numero delle modifiche da controllare ( code review )
```
cliccare sul numero a destra del commento del commit 
es 795846
```
da qui possiamo aggiungere commenti alle righe di codice tramite il + e fai 
```
start review
```
poi se tutto va bene si può fare 
```
Finish your review

e ci sono varie opzioni da selezionare 
```
se tutto va bene nelle opzioni che escono sopra cliccare su 
```
approve
```
poi 

```
cliccare su merge pull request 
e in seguenza 
confim merge
```
_______________
## ora cancellare  la branch dalla pagina dove siamo 

```
delete branch
```
_______________
## l'aiutante ora deve cambiare branch su VScode

```
andare su branch e cliccare su  switch branch
- git checkout main
```

una volta cambiata la branch e sei su main
su commit fare la freccia in basso (Pull)
```
pull
```
ora si va source control e sull'icona di git graph
```
tasto destro su 1-layout e cancellare
```
ora in locale hai soltanto una branch, la main branch

## passaggi da non dimenticare
Quando si lavora in team e si collabora ad una stessa repo è importante seguire una certa prassi:
1 all'inizio di ogni nuova implementazione, si fa pull e si crea un nuovo branch, a partire dal main

2 si continua a lavorare e committare sul proprio branch
3 al termine dello sviluppo si fa publish branch, ci si sposta sul branch main e attendi conferma dal capo,poi  si esegue un pull
è importante aggiornare il proprio branch main locale con le modifiche che possono essere state pushate dagli altri
collaboratori nel frattempo: così facendo si limitano i conflitti
4 si esegue il merge (lo fa solo il capo per non creare problemi)

5 si cancella il branch creato al punto 1

6 si esegue il push
e così via, si riparte dal primo punto...
