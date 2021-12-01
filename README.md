# git-homepage
code and content for personal home page published at annanardella.it

## initial setup - 2019 home page codebase
1. create the empty git-homepage repository on github
2. on local machine, do a `git clone` of this repository, so I end up with an empty git-homepage folder there as well. ![image](https://user-images.githubusercontent.com/59955581/144261137-f54bbd21-99a2-4c2d-97bd-d73f7b368ef1.png)

3. on local machine, copy into the git-homepage folder all the website files (from the 2019 home page folder)
4. do `git add -A`, `git commit` and finally `git-push` to get the starting codebase on the remote as well

## first update - add separate changes made to the CV
1. on local machine, copy the modified files (cvit.html, cveng.html and the css stylesheet) into the git-homepage folder, this will overwrite the previous ones.
3. then add, commit and push the changes as usual.
Now you are ready to start further development.

## website development workflow
1. on local machine, always do a `git fetch` first to see if you need to `git pull` from the remote 
2. to work on a specific feature/issue, create a branch for it with `git branch branchname` then switch to that branch with `git checkout branchname`
3. when satisfied with it, merge it back into main by first switching back to the main branch (`git checkout main`) and then merging (`git merge branchname`). 
NB you can do the `git branch` command by itself to see what branches you have and which on you're on
