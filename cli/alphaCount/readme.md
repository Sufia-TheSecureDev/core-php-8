## 2 way to run this CLI tool

open any terminal and run the command
### way 1 
```
php alpha-count.php --sen="PHP is love!"
```
</br>
` getopt(short_options , long_options_as_array) 
where short options are   -a/-h etc . this can write as --> </br>
 .............. [   getopt('short_options='ah::', ['sen:'])   ] 
 
  where '::' means optional argument and ':' means required argument also as i didn't mention any short option so i just keep it empty.
</br></br></br>


### way 2 

```
php alpha-count.php "PHP is love!"
```

in this command file name can get by  __$argv[0]__

</br></br>

### For this solution question was : 

Build a simple PHP CLI tool called alphacount. This tool should be run from the command line like alphacount “PHP is love!” and it should produce the output of 9 because it has a total of 9 alphabets/characters in the sentence.