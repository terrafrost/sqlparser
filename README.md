# EasyMOD SQL Parser

GPL-licensed SQL DDL conversion tool

phpseclib and SQL Parser were born out of EasyMOD - an automated modification installer for phpBB 2.0. After the original developer, Nutzzy99, left the new Modifications Team Lead, wGEric, took over and commissioned the re development of a new SQL Parser and SFTP support. I was tasked with SFTP support and markus_petrux with tasked with creating the new SQL Parser. 

The November 10, 2005 0.3.0 release of EasyMOD added the new SQL Parser, however, SFTP support never did materialize in EasyMOD. 

The stand-alone DDL conversion tool that used to be hosted at sql.phpmix.com was never (to my knowledge) open sourced. My expectation is that it would have been better integrated into phpBB2 than the re-creation included in this Git repo is, however, phpBB2 is dead and this is more just a PoC than anything. If anyone wants to rework the index page feel free to fork and (perhaps) submit pull requests.

This tool can be seen, in action, here:

http://phpseclib.sourceforge.net/sql/

### Known Issues

ALTER TABLEs don't work in MSSQL. See `sql_builder_mssql::alter_table`
