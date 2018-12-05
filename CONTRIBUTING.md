# Contributing

[![Gitter](https://img.shields.io/gitter/room/:user/:repo.svg?style=for-the-badge)](https://gitter.im/teamAlucard/E-Invoice?utm_source=share-link&utm_medium=link&utm_campaign=share-link)
&nbsp;&nbsp;&nbsp;[![Email](https://img.shields.io/badge/email-syedsalifmoin@gmail.com-green.svg?style=for-the-badge)](
https://mail.google.com/mail/?view=cm&fs=1&to=syedsalifmoin@gmail.com&su=E-INVOICE-ISSUE&body=ENTER-YOUR-ISSUE-HERE&cc=kiodeba11@gmail.com)

When contributing to this repository, please first discuss the change you wish to make via issue,
email, or on gitter. 

Please note we have a code of conduct, please follow it in all your interactions with the project.

## Pull Request Process

1. Ensure any install or build dependencies are removed before the end of the layer when doing a 
   build.
2. Update the README.md with details of changes to the interface, this includes new environment 
   variables, exposed ports, useful file locations and container parameters.
3. Your Pull Request would be reviewed by two other developers, once the developers are 
   satisfied with the changes they will merge your Pull Request.
4. Please be patient with us as we too are contributing to other projects.

## Write Good Commit Messages

A commit message consists of 3 parts:
- Title
- Commit body
    - Issue reference
Example:
```
INV000111.pdf: New format for the PDF 

This new format contains the shopkeeper's details as well and adds a payment confirmation stamp.

Closes: https://github.com/salif-04/E-Invoice/issues/13
```

### Title

Example:
```
filename: Short description of what you changed
```
- Should describe the change - the action being done in the commit.

### Commit Body

- Helps explain what you’re doing.
- Short Description of the issue *(Not Mandatory)*.
- Should describe the reasoning for your changes. This is especially important
  for complex changes that are not self explanatory. 
- This is also the right place to write about related bugs.

#### Issue reference

Example:
```
Closes https://github.com/salif-04/E-Invoice/issues/13
```
- Should use the `Fixes` keyword if your commit fixes a bug, or `Closes` if it
adds a feature/enhancement.
- Should use full URL to the issue.
