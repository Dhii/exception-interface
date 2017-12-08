# Dhii - Exception - Interface

[![Build Status](https://travis-ci.org/Dhii/exception-interface.svg?branch=master)](https://travis-ci.org/Dhii/exception-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/exception-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/exception-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/exception-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/exception-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/exception-interface/version)](https://packagist.org/packages/dhii/exception-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Interfaces for most common exceptions.

## Details
- [`ThrowableInterface`] - The base of all exception interfaces. Declares
all the same methods as `Exception` in a compatible way, and additionally
extends [`StringableInterface`].
- [`BadSubjectExceptionInterface`] - Base interface for all exceptions that
are related to some value being invalid, malformed, out of range, etc. Exposes
that value via `getSubject()`.
- [`InvalidArgumentExceptionInterface`] - Allows de-coupling from the vanilla
[`InvalidArgumentException`], and makes it more useful besides signalling the
problem type by exposing the argument via `BadSubjectExceptionInterface#getSubejct()`.
- [`ArgumentCodeAwareInterface`] - Useful with `InvalidArgumentExceptionInterface`
for providing information about the source of the problematic argument.


[`ThrowableInterface`]:                 src/ThrowableInterface.php
[`BadSubjectExceptionInterface`]:       src/BadSubjectExceptionInterface.php
[`InvalidArgumentExceptionInterface`]:  src/InvalidArgumentExceptionInterface.php
[`ArgumentCodeAwareInterface`]:         src/ArgumentCodeAwareInterface.php
[`StringableInterface`]:                https://github.com/Dhii/stringable-interface/blob/master/src/StringableInterface.php
[`InvalidArgumentException`]:           http://php.net/manual/en/class.invalidargumentexception.php

[Dhii]: https://github.com/Dhii/dhii
