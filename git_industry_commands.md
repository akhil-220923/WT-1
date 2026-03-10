cat << 'EOF' > README.md
# Git Commands Reference Guide

This document explains commonly used Git commands with Command Name, Syntax, Purpose, and Example.

---

## 1. Git Configuration Commands

### git config --global user.name
Syntax:
git config --global user.name "Your Name"

Purpose:
Sets the username for all Git commits.

Example:
git config --global user.name "Rahul Kumar"

### git config --global user.email
Syntax:
git config --global user.email "email@example.com"

Purpose:
Sets the email address for all Git commits.

Example:
git config --global user.email "rahul@gmail.com"

### git config --list
Syntax:
git config --list

Purpose:
Displays all Git configuration settings.

Example:
git config --list

### git config --unset
Syntax:
git config --global --unset key

Purpose:
Removes a Git configuration value.

Example:
git config --global --unset user.name

---

## 2. Repository Setup Commands

### git init
Syntax:
git init

Purpose:
Creates a new Git repository.

Example:
git init

### git clone
Syntax:
git clone repository-url

Purpose:
Copies a remote repository to your system.

Example:
git clone https://github.com/user/project.git

### git clone --branch
Syntax:
git clone --branch branch-name repository-url

Purpose:
Clones a specific branch.

Example:
git clone --branch develop https://github.com/user/project.git

### git clone --depth
Syntax:
git clone --depth 1 repository-url

Purpose:
Clones only the latest commit.

Example:
git clone --depth 1 https://github.com/user/project.git

---

## 3. Repository Status & Inspection

### git status
Syntax:
git status

Purpose:
Shows file status in the repository.

Example:
git status

### git log
Syntax:
git log

Purpose:
Displays commit history.

Example:
git log

### git log --oneline
Syntax:
git log --oneline

Purpose:
Shows commit history in one line.

Example:
git log --oneline

### git log --graph
Syntax:
git log --graph

Purpose:
Shows commit history in graph format.

Example:
git log --graph

### git show
Syntax:
git show commit-id

Purpose:
Shows details of a specific commit.

Example:
git show a1b2c3

### git diff
Syntax:
git diff

Purpose:
Shows changes between working directory and staging area.

Example:
git diff

### git diff --staged
Syntax:
git diff --staged

Purpose:
Shows staged changes.

Example:
git diff --staged

### git blame
Syntax:
git blame file-name

Purpose:
Shows who modified each line in a file.

Example:
git blame index.html

### git reflog
Syntax:
git reflog

Purpose:
Shows history of HEAD changes.

Example:
git reflog

### git shortlog
Syntax:
git shortlog

Purpose:
Shows commit summary by author.

Example:
git shortlog

---

## 4. File Tracking Commands

### git add
Syntax:
git add file-name

Purpose:
Adds a file to staging area.

Example:
git add index.html

### git add .
Syntax:
git add .

Purpose:
Adds all files to staging area.

Example:
git add .

### git add -p
Syntax:
git add -p

Purpose:
Adds changes interactively.

Example:
git add -p

### git restore
Syntax:
git restore file-name

Purpose:
Restores file changes.

Example:
git restore index.html

### git restore --staged
Syntax:
git restore --staged file-name

Purpose:
Unstages a file.

Example:
git restore --staged index.html

### git rm
Syntax:
git rm file-name

Purpose:
Deletes a file from repository.

Example:
git rm test.txt

### git mv
Syntax:
git mv old-name new-name

Purpose:
Renames or moves a file.

Example:
git mv file1.txt file2.txt

---

## 5. Commit Commands

### git commit
Syntax:
git commit

Purpose:
Records staged changes.

Example:
git commit

### git commit -m
Syntax:
git commit -m "message"

Purpose:
Commits changes with a message.

Example:
git commit -m "Added login page"

### git commit --amend
Syntax:
git commit --amend

Purpose:
Modifies the last commit.

Example:
git commit --amend

### git commit --no-edit
Syntax:
git commit --amend --no-edit

Purpose:
Amends commit without changing message.

Example:
git commit --amend --no-edit

---

## 6. Branch Management Commands

### git branch
Syntax:
git branch

Purpose:
Lists branches.

Example:
git branch

### git branch -a
Syntax:
git branch -a

Purpose:
Lists all branches.

Example:
git branch -a

### git branch -d
Syntax:
git branch -d branch-name

Purpose:
Deletes a branch.

Example:
git branch -d feature1

### git branch -D
Syntax:
git branch -D branch-name

Purpose:
Force deletes a branch.

Example:
git branch -D feature1

### git checkout
Syntax:
git checkout branch-name

Purpose:
Switches branch.

Example:
git checkout develop

### git checkout -b
Syntax:
git checkout -b branch-name

Purpose:
Creates and switches to a branch.

Example:
git checkout -b feature-login

### git switch
Syntax:
git switch branch-name

Purpose:
Switches branches.

Example:
git switch develop

### git switch -c
Syntax:
git switch -c branch-name

Purpose:
Creates and switches to new branch.

Example:
git switch -c feature-ui

---

## 7. Merge & Integration Commands

### git merge
Syntax:
git merge branch-name

Purpose:
Merges branches.

Example:
git merge develop

### git merge --no-ff
Syntax:
git merge --no-ff branch-name

Purpose:
Creates merge commit.

Example:
git merge --no-ff feature1

---

## 8. Remote Repository Commands

### git remote
Syntax:
git remote

Purpose:
Lists remote repositories.

Example:
git remote

### git remote -v
Syntax:
git remote -v

Purpose:
Shows remote URLs.

Example:
git remote -v

### git remote add
Syntax:
git remote add name repository-url

Purpose:
Adds remote repository.

Example:
git remote add origin https://github.com/user/project.git

### git remote remove
Syntax:
git remote remove name

Purpose:
Removes remote repository.

Example:
git remote remove origin

### git fetch
Syntax:
git fetch

Purpose:
Downloads remote changes.

Example:
git fetch

### git fetch --all
Syntax:
git fetch --all

Purpose:
Fetches from all remotes.

Example:
git fetch --all

### git pull
Syntax:
git pull

Purpose:
Fetches and merges changes.

Example:
git pull origin main

### git pull --rebase
Syntax:
git pull --rebase

Purpose:
Fetches and rebases changes.

Example:
git pull --rebase origin main

### git push
Syntax:
git push

Purpose:
Uploads commits.

Example:
git push origin main

### git push -u origin branch-name
Syntax:
git push -u origin branch-name

Purpose:
Pushes branch and sets upstream.

Example:
git push -u origin feature1

### git push --force
Syntax:
git push --force

Purpose:
Force push changes.

Example:
git push --force origin main

---

## 9. Stash Commands

### git stash
Syntax:
git stash

Purpose:
Temporarily saves changes.

Example:
git stash

### git stash list
Syntax:
git stash list

Purpose:
Lists stashes.

Example:
git stash list

### git stash pop
Syntax:
git stash pop

Purpose:
Applies and removes stash.

Example:
git stash pop

### git stash apply
Syntax:
git stash apply

Purpose:
Applies stash without deleting it.

Example:
git stash apply

### git stash drop
Syntax:
git stash drop stash@{0}

Purpose:
Deletes a stash.

Example:
git stash drop stash@{0}

### git stash clear
Syntax:
git stash clear

Purpose:
Deletes all stashes.

Example:
git stash clear

---

## 10. Reset & Undo Commands

### git reset
Syntax:
git reset commit-id

Purpose:
Resets repository to previous commit.

Example:
git reset HEAD~1

### git reset --soft
Syntax:
git reset --soft commit-id

Purpose:
Keeps changes staged.

Example:
git reset --soft HEAD~1

### git reset --mixed
Syntax:
git reset --mixed commit-id

Purpose:
Unstages changes.

Example:
git reset --mixed HEAD~1

### git reset --hard
Syntax:
git reset --hard commit-id

Purpose:
Deletes all changes.

Example:
git reset --hard HEAD~1

### git revert
Syntax:
git revert commit-id

Purpose:
Creates reverse commit.

Example:
git revert a1b2c3

### git clean -f
Syntax:
git clean -f

Purpose:
Removes untracked files.

Example:
git clean -f

### git clean -fd
Syntax:
git clean -fd

Purpose:
Removes untracked directories.

Example:
git clean -fd

---

## 11. Rebasing Commands

### git rebase
Syntax:
git rebase branch-name

Purpose:
Moves commits to another base branch.

Example:
git rebase main

### git rebase -i
Syntax:
git rebase -i HEAD~3

Purpose:
Interactive rebase.

Example:
git rebase -i HEAD~3

### git rebase --continue
Syntax:
git rebase --continue

Purpose:
Continues rebase after conflict.

Example:
git rebase --continue

### git rebase --abort
Syntax:
git rebase --abort

Purpose:
Cancels rebase.

Example:
git rebase --abort

---

## 12. Cherry Pick & Patch Commands

### git cherry-pick
Syntax:
git cherry-pick commit-id

Purpose:
Applies specific commit.

Example:
git cherry-pick a1b2c3

### git format-patch
Syntax:
git format-patch HEAD~1

Purpose:
Creates patch file.

Example:
git format-patch HEAD~1

### git apply
Syntax:
git apply patch-file

Purpose:
Applies patch.

Example:
git apply fix.patch

### git am
Syntax:
git am patch-file

Purpose:
Applies patch as commit.

Example:
git am fix.patch

---

## 13. Tagging Commands

### git tag
Syntax:
git tag

Purpose:
Lists tags.

Example:
git tag

### git tag -a
Syntax:
git tag -a tag-name -m "message"

Purpose:
Creates annotated tag.

Example:
git tag -a v1.0 -m "First release"

### git tag -d
Syntax:
git tag -d tag-name

Purpose:
Deletes tag.

Example:
git tag -d v1.0

### git push origin --tags
Syntax:
git push origin --tags

Purpose:
Pushes tags to remote.

Example:
git push origin --tags

---

## 14. Submodule Commands

### git submodule add
Syntax:
git submodule add repository-url

Purpose:
Adds submodule.

Example:
git submodule add https://github.com/user/library.git

### git submodule init
Syntax:
git submodule init

Purpose:
Initializes submodules.

Example:
git submodule init

### git submodule update
Syntax:
git submodule update

Purpose:
Updates submodules.

Example:
git submodule update

---

## 15. Debugging Commands

### git bisect
Syntax:
git bisect

Purpose:
Finds buggy commit.

Example:
git bisect

### git bisect start
Syntax:
git bisect start

Purpose:
Starts bisect.

Example:
git bisect start

### git bisect good
Syntax:
git bisect good commit-id

Purpose:
Marks good commit.

Example:
git bisect good a1b2c3

### git bisect bad
Syntax:
git bisect bad commit-id

Purpose:
Marks bad commit.

Example:
git bisect bad d4e5f6

EOF