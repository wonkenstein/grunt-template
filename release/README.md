This is Release directory.

/release/archive - contains all the zip files that are created by "grunt release"
/release/public - contains all files that should be in the release zip
/release/*.zip - this should be latest release zip

Only /release/archive/*.zip should be in version control
All other directories should be ignored as all other files are compiled by grunt
and should be in the latest release zip anyway
