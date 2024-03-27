



# Paginator (vs INFINITE LOAD)

                $page=3
            < 1 2 [3] 4 5 6 >
            /                \
$page+1     2                  4  | $page+1
    

  LOGIC   
|       ^
|       |
data    req
print() |
|       |
|       |
v       |
TEMPLATE



HW1: use another method to underline the selected page number
HW2*: try to use for loop to print the paginator
HW3: add limits to previous next: don't let the user go over  -done
    ideally- hide the arrows close to the limits  done


-for
-while
-do while
-----------



arrays
functions
modularity
file system (aka light database)
        ^
        |
        linux (permissions,groups,terminal)

<!-- 
  <?for($x = 1; $x <= 5; $x++):?>
    <a href="?p={$x}">
        <?=$x?>
    </a>
  <? endfor ?>
-->
