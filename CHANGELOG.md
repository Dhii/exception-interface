# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [*next-version*] - YYYY-MM-DD

### Changed
- **BC Breaking**: The argument value of `InvalidArgumentExceptionInterface`
now retrieved via `getSubject()`, as it extends the new `BadSubjectExceptionInterface`.

## [0.1] - 2017-09-01
Initial version.
