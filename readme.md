# Codi Submissions Repository

---

This repository contains exercises and challenges for Codi students

## Getting started

You will be working on set of different exercises and challenges . Follow these steps to begin working.

### Fork and clone this repository

First, you need to create your own copy of these exercises. We call this a "fork". Follow these steps to create your fork.

![Screenshot showing the fork button in GitHub](/assets/images/fork-start.png)

![Screenshot showing how to fork to your user account](/assets/images/fork-user-account.png)

![Screenshot showing the clone details](/assets/images/fork-clone.png)

![Screenshot showing the button to copy the clone details](/assets/images/fork-copy-url.png)

Next, you need to download your fork so that you have the files on your computer. Follow these steps to clone your fork. Open your Terminal and navigate to your directory for your course work.

```
cd <your-course-directory>
```

Run the following command in your terminal to clone this repository to your computer. Where it says `<url>`, you should paste the URL of your fork. _Hint: It's copied to your clipboard, so you can paste it in._

```
git clone <url>
```

For example, if your fork's URL is `git@github.com:***/Submissions.git`, the command would be:

```
git clone git@github.com:***/Submissions.git
```

Next, navigate to the repository's directory and open your code editor.

```
cd Submissions
code .
```

When you're done, you should see your code editor with the files open on the left, like the following screenshot.

![Screenshot showing the project open in your editor](/assets/images/fork-editor.png)

## Sync forked repo with the Codi Tech Submission

The Codi Tech Submission repo, is an active changes every day.
To keep working on the latest Submission folders you need to do the followings:

### Setup ( done once whenever you do a new clone )
`git remote add upstream git@github.com:coditech/Submissions.git`

### Updating ( Recurring step )
`git pull upstream master`
