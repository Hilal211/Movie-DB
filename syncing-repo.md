# Syncing your own Submissions repo with Codi Submissions repo

It is a common situation when we fork a project on **Github** and after some time we want to update our **fork** with the changes that have been integrated into the source project from where we forked. This is a simple guide on how to do that.

## Setup: Configuring a remote for a **fork** (Once on each new clone)

You must configure a **remote** that points to the **upstream repository** in Git to sync changes you make in a fork with the **original repository**. This also allows you to sync changes made in the original repository with the **fork**.

```js
const original_repository = "https://github.com/coditech/Submissions.git";
const fork_repository = "https://github.com/YOUR_USERNAME/YOUR_FORK.git";
```

1. Open Terminal
2. List the current configured remote repository for your fork

   ```bash
   $ git remote -v
   > origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
   > origin  https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
   ```

3. Specify a new remote **upstream repository** that will be synced with the fork.

   ```bash
    $ git remote add upstream https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY.git
   ```

4. Verify the new **upstream repository** you've specified for your fork.

```bash
    $ git remote -v
    > origin    https://github.com/YOUR_USERNAME/YOUR_FORK.git (fetch)
    > origin    https://github.com/YOUR_USERNAME/YOUR_FORK.git (push)
    > upstream  https://github.com/coditech/Submissions.git (fetch)
    > upstream  https://github.com/coditech/Submissions.git (push)
```

## Syncing a fork (to be done on every day and whenever a mentor say that he/she updated the Submission repo)

Sync a fork of a repository to keep it up-to-date with the upstream repository.

1. Open Terminal.
2. Change the current working directory to your local project.
3. Fetch the branches and their respective commits from the upstream repository. Commits to master will be stored in a local branch, upstream/master.

```bash
    $ git fetch upstream
    > remote: Counting objects: 75, done.
    > remote: Compressing objects: 100% (53/53), done.
    > remote: Total 62 (delta 27), reused 44 (delta 9)
    > Unpacking objects: 100% (62/62), done.
    > From https://github.com/ORIGINAL_OWNER/ORIGINAL_REPOSITORY
    >  * [new branch]      master     -> upstream/master
```

4. Check out your fork's local **master** branch.

```bash
    $ git checkout master
    > Switched to branch 'master'
```

5. Merge the changes from upstream/master into your local master branch. This brings your fork's master branch into sync with the upstream repository, without losing your local changes.

```bash
    $ git merge upstream/master
    > Updating a422352..5fdff0f
    > Fast-forward
    >  README                    |    9 -------
    >  README.md                 |    7 ++++++
    >  2 files changed, 7 insertions(+), 9 deletions(-)
    >  delete mode 100644 README
    >  create mode 100644 README.md
```

If your local branch didn't have any unique commits, Git will instead perform a "fast-forward":

```bash
    $ git merge upstream/master
    > Updating 34e91da..16c56ad
    > Fast-forward
    >  README.md                 |    5 +++--
    >  1 file changed, 3 insertions(+), 2 deletions(-)
```

---

## **Syncing your fork only updates your local copy of the repository. To update your fork on GitHub, you must**

---

## You already have done a git Push if not go over this link <https://help.github.com/en/github/using-git/pushing-commits-to-a-remote-repository>

---

Resources: <https://help.github.com/en/github>
