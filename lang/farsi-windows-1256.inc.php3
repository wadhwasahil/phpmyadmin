<?php
/* $Id$ */

/**
 * Original translation to Farsi by Name <username at hostname.com>
 */

$charset = 'windows-1256'; //to localize
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif'; //change for font support as needed
$right_font_family = 'arial, helvetica, geneva, sans-serif'; //change for font support as needed
$number_thousands_separator = ','; //to localize
$number_decimal_separator = '.'; // to localize
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB'); //to translate

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'); //to translate
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'); //to translate
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p'; //to translate/localize
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate/localize

$strAPrimaryKey = 'A primary key has been added on %s'; //to translate
$strAbortedClients = 'Aborted'; //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';   //to translate
$strAccessDenied = 'Access denied'; //to translate
$strAction = 'Action'; //to translate
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate
$strAddNewField = 'Add new field'; //to translate
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strAddSearchConditions = 'Add search conditions (body of the "where" clause):'; //to translate
$strAddToIndex = 'Add to index &nbsp;%s&nbsp;column(s)'; //to translate
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAddedColumnComment = 'Added comment for column';   //to translate
$strAddedColumnRelation = 'Added relation for column';   //to translate
$strAdministration = 'Administration'; //to translate
$strAffectedRows = 'Affected rows:'; //to translate
$strAfter = 'After %s'; //to translate
$strAfterInsertBack = 'Go back to previous page'; //to translate
$strAfterInsertNewInsert = 'Insert another new row'; //to translate
$strAll = 'All'; //to translate
$strAllTableSameWidth = 'display all Tables with same width?'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnIndex = 'An index has been added on %s'; //to translate
$strAnalyzeTable = 'Analyze table'; //to translate
$strAnd = 'And'; //to translate
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAscending = 'Ascending'; //to translate
$strAtBeginningOfTable = 'At Beginning of Table'; //to translate
$strAtEndOfTable = 'At End of Table'; //to translate
$strAttr = 'Attributes'; //to translate

$strBack = 'Back'; //to translate
$strBeginCut = 'BEGIN CUT'; //to translate
$strBeginRaw = 'BEGIN RAW'; //to translate
$strBinary = 'Binary'; //to translate
$strBinaryDoNotEdit = 'Binary - do not edit'; //to translate
$strBookmarkDeleted = 'The bookmark has been deleted.'; //to translate
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = 'Browse'; //to translate
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate
$strBzip = '"bzipped"'; //to translate

$strCannotLogin = 'Cannot login to MySQL server'; //to translate
$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.'; //to translate
$strCantRenameIdxToPrimary = 'Can\'t rename index to PRIMARY!'; //to translate
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.'; //to translate
$strCardinality = 'Cardinality'; //to translate
$strCarriage = 'Carriage return: \\r'; //to translate
$strChange = 'Change'; //to translate
$strChangeDisplay = 'Choose Field to display'; //to translate
$strChangePassword = 'Change password'; //to translate
$strCharsetOfFile = 'Character set of the file:'; //to translate
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Check table'; //to translate
$strChoosePage = 'Please choose a Page to edit'; //to translate
$strColComFeat = 'Displaying Column Comments'; //to translate
$strColumn = 'Column'; //to translate
$strColumnNames = 'Column names'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strCommand = 'Command'; //to translate
$strComments = 'Comments'; //to translate
$strCompleteInserts = 'Complete inserts'; //to translate
$strCompression = 'Compression'; //to translate
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.'; //to translate
$strConfigureTableCoord = 'Please configure the coordinates for table %s'; //to translate
$strConfirm = 'Do you really want to do it?'; //to translate
$strConnections = 'Connections'; //to translate
$strCookiesRequired = 'Cookies must be enabled past this point.'; //to translate
$strCopyTable = 'Copy table to (database<b>.</b>table):'; //to translate
$strCopyTableOK = 'Table %s has been copied to %s.'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strCreate = 'Create'; //to translate
$strCreateIndex = 'Create an index on&nbsp;%s&nbsp;columns'; //to translate
$strCreateIndexTopic = 'Create a new index'; //to translate
$strCreateNewDatabase = 'Create new database'; //to translate
$strCreateNewTable = 'Create new table on database %s'; //to translate
$strCreatePage = 'Create a new Page'; //to translate
$strCreatePdfFeat = 'Creation of PDFs'; //to translate
$strCriteria = 'Criteria'; //to translate

$strData = 'Data'; //to translate
$strDataDict = 'Data Dictionary'; //to translate
$strDataOnly = 'Data only'; //to translate
$strDatabase = 'Database '; //to translate
$strDatabaseHasBeenDropped = 'Database %s has been dropped.'; //to translate
$strDatabaseWildcard = 'Database (wildcards allowed):'; //to translate
$strDatabases = 'databases'; //to translate
$strDatabasesStats = 'Databases statistics'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strDefault = 'Default'; //to translate
$strDelete = 'Delete'; //to translate
$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDeleteUserMessage = 'You have deleted the user %s.'; //to translate
$strDeleted = 'The row has been deleted'; //to translate
$strDeletedRows = 'Deleted rows:'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strDescending = 'Descending'; //to translate
$strDisabled = 'Disabled'; //to translate
$strDisplay = 'Display'; //to translate
$strDisplayFeat = 'Display Features'; //to translate
$strDisplayOrder = 'Display order:'; //to translate
$strDisplayPDF = 'Display PDF schema'; //to translate
$strDoAQuery = 'Do a "query by example" (wildcard: "%")'; //to translate
$strDoYouReally = 'Do you really want to '; //to translate
$strDocu = 'Documentation'; //to translate
$strDrop = 'Drop'; //to translate
$strDropDB = 'Drop database %s'; //to translate
$strDropTable = 'Drop table'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strDumpXRows = 'Dump %s row(s) starting at record # %s.'; //to translate
$strDumpingData = 'Dumping data for table'; //to translate
$strDynamic = 'dynamic'; //to translate

$strEdit = 'Edit'; //to translate
$strEditPDFPages = 'Edit PDF Pages'; //to translate
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = 'Empty'; //to translate
$strEmptyResultSet = 'MySQL returned an empty result set (i.e. zero rows).'; //to translate
$strEnabled = 'Enabled'; //to translate
$strEnd = 'End'; //to translate
$strEndCut = 'END CUT'; //to translate
$strEndRaw = 'END RAW'; //to translate
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English '; //to translate
$strError = 'Error'; //to translate
$strExplain = 'Explain SQL'; //to translate
$strExport = 'Export'; //to translate
$strExportToXML = 'Export to XML format'; //to translate
$strExtendedInserts = 'Extended inserts'; //to translate
$strExtra = 'Extra'; //to translate

$strFailedAttempts = 'Failed attempts'; //to translate
$strField = 'Field'; //to translate
$strFieldHasBeenDropped = 'Field %s has been dropped'; //to translate
$strFields = 'Fields'; //to translate
$strFieldsEmpty = ' The field count is empty! '; //to translate
$strFieldsEnclosedBy = 'Fields enclosed by'; //to translate
$strFieldsEscapedBy = 'Fields escaped by'; //to translate
$strFieldsTerminatedBy = 'Fields terminated by'; //to translate
$strFileCouldNotBeRead = 'File could not be read';   //to translate
$strFixed = 'fixed'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of these tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strFlushTable = 'Flush the table ("FLUSH")'; //to translate
$strFormEmpty = 'Missing value in the form !'; //to translate
$strFormat = 'Format'; //to translate
$strFullText = 'Full Texts'; //to translate
$strFunction = 'Function'; //to translate

$strGenBy = 'Generated by'; //to translate
$strGenTime = 'Generation Time'; //to translate
$strGeneralRelationFeat = 'General relation features'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strGo = 'Go'; //to translate
$strGrantOption = 'Grant'; //to translate
$strGrants = 'Grants'; //to translate
$strGzip = '"gzipped"'; //to translate

$strHasBeenAltered = 'has been altered.'; //to translate
$strHasBeenCreated = 'has been created.'; //to translate
$strHaveToShow = 'You have to choose at least one Column to display'; //to translate
$strHome = 'Home'; //to translate
$strHomepageOfficial = 'Official phpMyAdmin Homepage'; //to translate
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page'; //to translate
$strHost = 'Host'; //to translate
$strHostEmpty = 'The host name is empty!'; //to translate

$strId = 'ID'; //to translate
$strIdxFulltext = 'Fulltext'; //to translate
$strIfYouWish = 'If you wish to load only some of a table\'s columns, specify a comma separated field list.'; //to translate
$strIgnore = 'Ignore'; //to translate
$strIgnoringFile = 'Ignoring file %s';   //to translate
$strImportDocSQL = 'Import docSQL Files'; //to translate
$strImportFiles = 'Import files';   //to translate
$strImportFinished = 'Import finished';   //to translate
$strInUse = 'in use'; //to translate
$strIndex = 'Index'; //to translate
$strIndexHasBeenDropped = 'Index %s has been dropped'; //to translate
$strIndexName = 'Index name&nbsp;:'; //to translate
$strIndexType = 'Index type&nbsp;:'; //to translate
$strIndexes = 'Indexes'; //to translate
$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.'; //to translate
$strInsert = 'Insert'; //to translate
$strInsertAsNewRow = 'Insert as a new row'; //to translate
$strInsertNewRow = 'Insert new row'; //to translate
$strInsertTextfiles = 'Insert data from a textfile into table'; //to translate
$strInsertedRows = 'Inserted rows:'; //to translate
$strInstructions = 'Instructions'; //to translate
$strInvalidName = '"%s" is a reserved word, you can\'t use it as a database/table/field name.'; //to translate

$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strKeepPass = 'Do not change the password'; //to translate
$strKeyname = 'Keyname'; //to translate
$strKill = 'Kill'; //to translate

$strLaTeX = 'LaTeX'; //to translate
$strLandscape = 'Landscape'; //to translate
$strLength = 'Length'; //to translate
$strLengthSet = 'Length/Values*'; //to translate
$strLimitNumRows = 'Number of rows per page'; //to translate
$strLineFeed = 'Linefeed: \\n'; //to translate
$strLines = 'Lines'; //to translate
$strLinesTerminatedBy = 'Lines terminated by'; //to translate
$strLinkNotFound = 'Link not found'; //to translate
$strLinksTo = 'Links to'; //to translate
$strLocalhost = 'Local'; //to translate
$strLocationTextfile = 'Location of the textfile'; //to translate
$strLogPassword = 'Password:'; //to translate
$strLogUsername = 'Username:'; //to translate
$strLogin = 'Login'; //to translate
$strLoginInformation = 'Login Information'; //to translate
$strLogout = 'Log out'; //to translate

$strMissingBracket = 'Missing Bracket'; //to translate
$strModifications = 'Modifications have been saved'; //to translate
$strModify = 'Modify'; //to translate
$strModifyIndexTopic = 'Modify an index'; //to translate
$strMoreStatusVars = 'More status variables'; //to translate
$strMoveTable = 'Move table to (database<b>.</b>table):'; //to translate
$strMoveTableOK = 'Table %s has been moved to %s.'; //to translate
$strMySQLCharset = 'MySQL charset'; //to translate
$strMySQLReloaded = 'MySQL reloaded.'; //to translate
$strMySQLSaid = 'MySQL said: '; //to translate
$strMySQLServerProcess = 'MySQL %pma_s1% running on %pma_s2% as %pma_s3%'; //to translate
$strMySQLShowProcess = 'Show processes'; //to translate
$strMySQLShowStatus = 'Show MySQL runtime information'; //to translate
$strMySQLShowVars = 'Show MySQL system variables'; //to translate

$strName = 'Name'; //to translate
$strNext = 'Next'; //to translate
$strNo = 'No'; //to translate
$strNoDatabases = 'No databases'; //to translate
$strNoDescription = 'no Description'; //to translate
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.'; //to translate
$strNoExplain = 'Skip Explain SQL'; //to translate
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.'; //to translate
$strNoIndex = 'No index defined!'; //to translate
$strNoIndexPartsDefined = 'No index parts defined!'; //to translate
$strNoModification = 'No change'; //to translate
$strNoPassword = 'No Password'; //to translate
$strNoPhp = 'Without PHP Code'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoQuery = 'No SQL query!'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = 'No tables found in database.'; //to translate
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNoUsersSelected = 'No users selected.'; //to translate
$strNoValidateSQL = 'Skip Validate SQL'; //to translate
$strNone = 'None'; //to translate
$strNotNumber = 'This is not a number!'; //to translate
$strNotOK = 'not OK'; //to translate
$strNotSet = '<b>%s</b> table not found or not set in %s'; //to translate
$strNotValidNumber = ' is not a valid row number!'; //to translate
$strNull = 'Null'; //to translate
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>'; //to translate
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)'; //to translate
$strNumTables = 'Tables'; //to translate

$strOK = 'OK'; //to translate
$strOftenQuotation = 'Often quotation marks. OPTIONALLY means that only char and varchar fields are enclosed by the "enclosed by"-character.'; //to translate
$strOperations = 'Operations'; //to translate
$strOptimizeTable = 'Optimize table'; //to translate
$strOptionalControls = 'Optional. Controls how to write or read special characters.'; //to translate
$strOptionally = 'OPTIONALLY'; //to translate
$strOptions = 'Options'; //to translate
$strOr = 'Or'; //to translate
$strOriginalInterface = 'original interface'; //to translate
$strOverhead = 'Overhead'; //to translate

$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPageNumber = 'Page number:'; //to translate
$strPartialText = 'Partial Texts'; //to translate
$strPassword = 'Password'; //to translate
$strPasswordChanged = 'The Password for %s was changed successfully.'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPdfDbSchema = 'Schema of the the "%s" database - Page %s'; //to translate
$strPdfInvalidPageNum = 'Undefined PDF page number!'; //to translate
$strPdfInvalidTblName = 'The "%s" table doesn\'t exist!'; //to translate
$strPdfNoTables = 'No tables'; //to translate
$strPerHour = 'per hour'; //to translate
$strPhp = 'Create PHP Code'; //to translate
$strPmaDocumentation = 'phpMyAdmin documentation'; //to translate
$strPmaUriError = 'The <tt>$cfg[\'PmaAbsoluteUri\']</tt> directive MUST be set in your configuration file!'; //to translate
$strPortrait = 'Portrait'; //to translate
$strPos1 = 'Begin'; //to translate
$strPrevious = 'Previous'; //to translate
$strPrimary = 'Primary'; //to translate
$strPrimaryKey = 'Primary key'; //to translate
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped'; //to translate
$strPrimaryKeyName = 'The name of the primary key must be... PRIMARY!'; //to translate
$strPrimaryKeyWarning = '("PRIMARY" <b>must</b> be the name of and <b>only of</b> a primary key!)'; //to translate
$strPrint = 'Print'; //to translate
$strPrintView = 'Print view'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.'; //to translate
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.'; //to translate
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.'; //to translate
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connecting, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivileges = 'Privileges'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strProcesslist = 'Process list'; //to translate
$strProperties = 'Properties'; //to translate
$strPutColNames = 'Put fields names at first row'; //to translate

$strQBE = 'Query'; //to translate
$strQBEDel = 'Del'; //to translate
$strQBEIns = 'Ins'; //to translate
$strQueryOnDb = 'SQL-query on database <b>%s</b>:'; //to translate
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.'; //to translate
$strQueryType = 'Query type'; //to translate

$strReType = 'Re-type'; //to translate
$strReceived = 'Received'; //to translate
$strRecords = 'Records'; //to translate
$strReferentialIntegrity = 'Check referential integrity:'; //to translate
$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.'; //to translate
$strRelationView = 'Relation view'; //to translate
$strRelationalSchema = 'Relational schema'; //to translate
$strReloadFailed = 'MySQL reload failed.'; //to translate
$strReloadMySQL = 'Reload MySQL'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRememberReload = 'Remember to reload the server.'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRenameTable = 'Rename table to'; //to translate
$strRenameTableOK = 'Table %s has been renamed to %s'; //to translate
$strRepairTable = 'Repair table'; //to translate
$strReplace = 'Replace'; //to translate
$strReplaceTable = 'Replace table data with file'; //to translate
$strReset = 'Reset'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for %s'; //to translate
$strRevokeMessage = 'You have revoked the privileges for %s'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRowSize = ' Row size '; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = 'row(s) starting from record #'; //to translate
$strRowsModeHorizontal = 'horizontal'; //to translate
$strRowsModeOptions = 'in %s mode and repeat headers after %s cells'; //to translate
$strRowsModeVertical = 'vertical'; //to translate
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunQuery = 'Submit Query'; //to translate
$strRunSQLQuery = 'Run SQL query/queries on database %s'; //to translate
$strRunning = 'running on %s'; //to translate

$strSQL = 'SQL'; //to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:'; //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem'; //to translate
$strSQLQuery = 'SQL-query'; //to translate
$strSQLResult = 'SQL result'; //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer'; //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote'; //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String'; //to translate
$strSave = 'Save'; //to translate
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page'; //to translate
$strSearch = 'Search'; //to translate
$strSearchFormTitle = 'Search in database'; //to translate
$strSearchInTables = 'Inside table(s):'; //to translate
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):'; //to translate
$strSearchOption1 = 'at least one of the words'; //to translate
$strSearchOption2 = 'all words'; //to translate
$strSearchOption3 = 'the exact phrase'; //to translate
$strSearchOption4 = 'as regular expression'; //to translate
$strSearchResultsFor = 'Search results for "<i>%s</i>" %s:'; //to translate
$strSearchType = 'Find:'; //to translate
$strSelect = 'Select'; //to translate
$strSelectADb = 'Please select a database'; //to translate
$strSelectAll = 'Select All'; //to translate
$strSelectFields = 'Select fields (at least one):'; //to translate
$strSelectNumRows = 'in query'; //to translate
$strSelectTables = 'Select Tables'; //to translate
$strSend = 'Save as file'; //to translate
$strSent = 'Sent'; //to translate
$strServer = 'Server %s'; //to translate
$strServerChoice = 'Server Choice'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.'; //to translate
$strServerVars = 'Server variables and settings'; //to translate
$strServerVersion = 'Server version'; //to translate
$strSessionValue = 'Session value'; //to translate
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').'; //to translate
$strShow = 'Show'; //to translate
$strShowAll = 'Show all'; //to translate
$strShowColor = 'Show color'; //to translate
$strShowCols = 'Show columns'; //to translate
$strShowDatadictAs = 'Data Dictionary Format'; //to translate
$strShowGrid = 'Show grid'; //to translate
$strShowPHPInfo = 'Show PHP information'; //to translate
$strShowTableDimension = 'Show dimension of tables'; //to translate
$strShowTables = 'Show tables'; //to translate
$strShowThisQuery = ' Show this query here again '; //to translate
$strShowingRecords = 'Showing rows'; //to translate
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate
$strSpaceUsage = 'Space usage'; //to translate
$strSplitWordsWithSpace = 'Words are separated by a space character (" ").'; //to translate
$strStatement = 'Statements'; //to translate
$strStatus = 'Status'; //to translate
$strStrucCSV = 'CSV data'; //to translate
$strStrucData = 'Structure and data'; //to translate
$strStrucDrop = 'Add \'drop table\''; //to translate
$strStrucExcelCSV = 'CSV for Ms Excel data'; //to translate
$strStrucOnly = 'Structure only'; //to translate
$strStructPropose = 'Propose table structure'; //to translate
$strStructure = 'Structure'; //to translate
$strSubmit = 'Submit'; //to translate
$strSuccess = 'Your SQL-query has been executed successfully'; //to translate
$strSum = 'Sum'; //to translate

$strTable = 'Table'; //to translate
$strTableComments = 'Table comments'; //to translate
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableHasBeenDropped = 'Table %s has been dropped'; //to translate
$strTableHasBeenEmptied = 'Table %s has been emptied'; //to translate
$strTableHasBeenFlushed = 'Table %s has been flushed'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableOfContents = 'Table of contents'; //to translate
$strTableStructure = 'Table structure for table'; //to translate
$strTableType = 'Table type'; //to translate
$strTables = '%s table(s)'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = 'The content of your file has been inserted.'; //to translate
$strTheContents = 'The contents of the file replaces the contents of the selected table for rows with identical primary or unique key.'; //to translate
$strTheTerminator = 'The terminator of the fields.'; //to translate
$strThisHost = 'This Host'; //to translate
$strThisNotDirectory = 'This was not a directory';   //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate
$strTime = 'Time'; //to translate
$strTotal = 'total'; //to translate
$strTotalUC = 'Total'; //to translate
$strTraffic = 'Traffic'; //to translate
$strType = 'Type'; //to translate

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = 'Unique'; //to translate
$strUnselectAll = 'Unselect All'; //to translate
$strUpdatePrivMessage = 'You have updated the privileges for %s.'; //to translate
$strUpdateProfile = 'Update profile:'; //to translate
$strUpdateProfileMessage = 'The profile has been updated.'; //to translate
$strUpdateQuery = 'Update Query'; //to translate
$strUsage = 'Usage'; //to translate
$strUseBackquotes = 'Enclose table and field names with backquotes'; //to translate
$strUseTables = 'Use Tables'; //to translate
$strUseTextField = 'Use text field'; //to translate
$strUser = 'User'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUserEmpty = 'The user name is empty!'; //to translate
$strUserName = 'User name'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserOverview = 'User overview'; //to translate
$strUsers = 'Users'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strValidateSQL = 'Validate SQL'; //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strValue = 'Value'; //to translate
$strVar = 'Variable'; //to translate
$strViewDump = 'View dump (schema) of table'; //to translate
$strViewDumpDB = 'View dump (schema) of database'; //to translate

$strWebServerUploadDirectory = 'web-server upload directory'; //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached'; //to translate
$strWelcome = 'Welcome to %s'; //to translate
$strWithChecked = 'With selected:'; //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';   //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';   //to translate
$strWrongUser = 'Wrong username/password. Access denied.'; //to translate

$strYes = 'Yes'; //to translate

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate
$strZip = '"zipped"'; //to translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMinTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
?>
