<?php
/* $Id$ */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$left_font_family = 'verdana, "arial ce", arial, helvetica, geneva, sans-serif';
$right_font_family = '"arial ce", arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajt�w', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Nie', 'Pon', 'Wto', '�ro', 'Czw', 'Pi�', 'Sob');
$month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Pa�', 'Lis', 'Gru');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';
$timespanfmt = '%s dni, %s godzin, %s minut i %s sekund';

$strAPrimaryKey = 'Do %s dodany zosta� klucz podstawowy';
$strAbortedClients = 'Przerwane';
$strAbsolutePathToDocSqlDir = 'Prosz� poda� bezwzgl�dn� �cie�k� na serwerze www do katalogu docSQL';
$strAccessDenied = 'Brak dost�pu';
$strAction = 'Dzia�anie';
$strAddDeleteColumn = 'Dodanie/usuni�cie p�l';
$strAddDeleteRow = 'Dodanie/usuni�cie wierszy kryteri�w';
$strAddNewField = 'Dodanie nowego pola';
$strAddPriv = 'Dodanie nowych uprawnien';
$strAddPrivMessage = 'Nowe uprawnienia zosta�y dodane.';
$strAddPrivilegesOnDb = 'Dodaj uprawnienia dla nast�puj�cej bazy danych';
$strAddPrivilegesOnTbl = 'Dodaj uprawnienia dla nast�puj�cej tabeli';
$strAddSearchConditions = 'Dodanie warunk�w przeszukiwania (warunek dla "where"):';
$strAddToIndex = 'Dodanie &nbsp;%s&nbsp;kolumn do indeksu ';
$strAddUser = 'Dodanie nowego u�ytkownika';
$strAddUserMessage = 'Nowy u�ytkownik zosta� dodany.';
$strAddedColumnComment = 'Zosta� dodany komentarz dla kolumny';
$strAddedColumnRelation = 'Zosta�a dodana relacja dla kolumny';
$strAdministration = 'Administracja';
$strAffectedRows = 'Zmodyfikowanych rekord�w:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Powr�t';
$strAfterInsertNewInsert = 'Wstawienie nowego rekordu';
$strAll = 'Wszystko';
$strAllTableSameWidth = 'wy�wietli� wszystkie tabele z tak� sam� szeroko�ci�?';
$strAlterOrderBy = 'Sortowanie tabeli wg';
$strAnIndex = 'Do %s dodany zosta� indeks';
$strAnalyzeTable = 'Analizowanie tabeli';
$strAnd = 'Oraz';
$strAny = 'Dowolny';
$strAnyColumn = 'Dowolna kolumna';
$strAnyDatabase = 'Dowolna baza danych';
$strAnyHost = 'Dowolny host';
$strAnyTable = 'Dowolna tabela';
$strAnyUser = 'Dowolny u�ytkownik';
$strAscending = 'Rosn�co';
$strAtBeginningOfTable = 'Na pocz�tku tabeli';
$strAtEndOfTable = 'Na ko�cu tabeli';
$strAttr = 'Atrybuty';

$strBack = 'Powr�t';
$strBeginCut = 'POCZ�TEK CUT';
$strBeginRaw = 'POCZ�TEK RAW';
$strBinary = ' Binarne ';
$strBinaryDoNotEdit = ' Binarne - nie do edycji ';
$strBookmarkDeleted = 'Zapami�tane zapytanie SQL zosta�o usuni�te.';
$strBookmarkLabel = 'Nazwa';
$strBookmarkQuery = 'Zapami�tane zapytanie SQL';
$strBookmarkThis = 'Zapami�tanie zapytania SQL';
$strBookmarkView = 'Tylko do pokazania';
$strBrowse = 'Przegl�danie';
$strBzError = 'phpMyAdminoni nie uda�o si� skompresowa� zrzutu z powodu zepsutego rozszerzenia Bz2 w tej wersji php. Jest bardzo zalecane by ustawi� dyrektyw� <code>$cfg[\'BZipDump\']</code> w pliku konfiguracyjnym phpMyAdmina na <code>FALSE</code>. Je�li chcesz u�y� funkcji kompresji Bz2, php powinien zosta� zakutalizowany do najnowszej wersji. Szczeg�y mo�na zobaczy� w raporcie na temat b��d�w php %s.';
$strBzip = '".bz2"';

$strCannotLogin = 'Nie uda�o si� zalogowa� na serwer MySQL';
$strCantLoadMySQL = 'nie mo�na za�adowac modu�u MySQL,<br />prosz� sprawdzi� konfiguracj� PHP.';
$strCantLoadRecodeIconv = 'Nie uda�o si� za�adowa� rozszerze� iconv lub recode, kt�re s� niezb�dne do konwersji kodowania znak�w, skonfiguruj php tak, by m�g� u�ywa� tych rozszerze� albo zablokuj konwersj� kodowania znak�w w phpMyAdminie.';
$strCantRenameIdxToPrimary = 'Nie mo�na zmieni� nazwy indeksu na PRIMARY!';
$strCantUseRecodeIconv = 'Nie uda�o si� u�y� ani funkcji iconv, ani libiconv, mimo �e rozszerzenia zg�aszaj� si� jako za�adowane. Zprawd� swoj� konfiguracj� php.';
$strCardinality = 'Moc';
$strCarriage = 'Znak powrotu: \\r';
$strChange = 'Zmiana';
$strChangeDisplay = 'Wybierz wy�wietlane pole';
$strChangePassword = 'Zmiana has�a';
$strCharsetOfFile = 'System kodowanie znak�w dla pliku:';
$strCheckAll = 'Zaznaczenie wszystkich';
$strCheckDbPriv = 'Sprawdzanie uprawnie� bazy danych';
$strCheckTable = 'Sprawdzanie tabeli';
$strChoosePage = 'Prosz� wybra� stron� do edycji';
$strColComFeat = 'Wy�wietlanie komentarzy dla kolumn';
$strColumn = 'Kolumna';
$strColumnNames = 'Nazwy kolumn';
$strColumnPrivileges = 'Uprawnienia specyficzne dla kolumn';
$strCommand = 'Polecenie';
$strComments = 'Komentarze';
$strCompleteInserts = 'Pe�ne dodania';
$strCompression = 'Kompresja';
$strConfigFileError = 'phpMyAdmin nie zdo�a� odczyta� twojego pliku konfiguracj!<br />Mo�e si� to zdarzy�, je�li php znajdzie w nim b��d sk�adniowy lub nie mo�e znale�� tego pliku.<br />Prosz� wywo�a� bezpo�rednio plik konfiguracyjny u�ywaj�c poni�szego linku i odczyta� otrzymane komunikat(y) o b��dach. W wi�kszo�ci przypadk�w brakuje gdzie� cudzys�owu lub �rednika.<br />Je�eli otrzymasz pust� stron�, wszystko jest w porz�dku.';
$strConfigureTableCoord = 'Prosz� skonfigurowa� wsp�rz�dnie dla tabeli %s';
$strConfirm = 'Czy na pewno to zrobi�?';
$strConnections = 'Po��czenia';
$strCookiesRequired = 'Odt�d musi by� w��czona obs�uga "cookies".';
$strCopyTable = 'Skopiuj tabel� do (bazadanych<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s zosta�a skopiowana do %s.';
$strCouldNotKill = 'phpMyAdminowi nie uda�o si� unicestwi� w�tku %s. Prawdopodobnie zosta� on ju� zamkni�ty.';
$strCreate = 'Utworzenie';
$strCreateIndex = 'Utworzenie indeksu dla %s kolumn';
$strCreateIndexTopic = 'Utworzenie nowego indeksu';
$strCreateNewDatabase = 'Utworzenie nowej bazy danych';
$strCreateNewTable = 'Utworzenie nowej tabeli dla bazy danych %s';
$strCreatePage = 'Utworzenie nowej strony';
$strCreatePdfFeat = 'Tworzenie PDF-�w';
$strCriteria = 'Kryteria';

$strData = 'Dane';
$strDataDict = 'S�ownik danych';
$strDataOnly = 'Tylko dane';
$strDatabase = 'Baza danych ';
$strDatabaseHasBeenDropped = 'Baza danych %s zosta�a usuni�ta.';
$strDatabaseWildcard = 'Baza danych (dozwolone maski):';
$strDatabases = 'bazy danych';
$strDatabasesStats = 'Statystyki baz danych';
$strDbPrivileges = 'Uprawnienia specyficzne dla baz danych';
$strDefault = 'Domy�lnie';
$strDelete = 'Skasowanie';
$strDeleteAndFlush = 'Usuni�cie u�ytkownik�w, a nast�pnie prze�adowanie uprawnie�.';
$strDeleteAndFlushDescr = 'Jest to najzgrabiejszy spos�b, ale prze�adowanie uprawnie� mo�e potrwa� jaki� czas.';
$strDeleteFailed = 'Kasowanie nie powiod�o si�!';
$strDeleteUserMessage = 'Usun��e� uzytkownika  %s.';
$strDeleted = 'Rekord zosta� skasowany';
$strDeletedRows = 'Skasowane rekordy:';
$strDeleting = 'Usuwanie %s';
$strDescending = 'Malej�co';
$strDisabled = 'wy��czone';
$strDisplay = 'Poka�';
$strDisplayFeat = 'Funkcje wy�wietlania';
$strDisplayOrder = 'Kolejno�� wy�wietlania:';
$strDisplayPDF = 'Wy�wietl schemat PDF';
$strDoAQuery = 'Wykonaj "zapytanie przez przyk�ad" (znak globalny: "%")';
$strDoYouReally = 'Czy na pewno wykona� ';
$strDocu = 'Dokumentacja';
$strDrop = 'Usuni�cie';
$strDropDB = 'Usuni�cie bazy danych %s';
$strDropTable = 'Usuni�cie tabeli';
$strDropUsersDb = 'Usuni�cie baz danych o takich samych nazwach jak u�ytkownicy.';
$strDumpXRows = 'Zrzu� %s wierszy zaczynaj�c od wiersza %s.';
$strDumpingData = 'Zrzut danych tabeli';
$strDynamic = 'zmienny';

$strEdit = 'Edycja';
$strEditPDFPages = 'Edycja stron PDF';
$strEditPrivileges = 'Edycja uprawnie�';
$strEffective = 'Efektywne';
$strEmpty = 'Wyczyszczenie';
$strEmptyResultSet = 'MySQL zwr�ci� pusty wynik (np. zero rekord�w).';
$strEnabled = 'w��czone';
$strEnd = 'Koniec';
$strEndCut = 'KONIEC CUT';
$strEndRaw = 'KONIEC RAW';
$strEnglishPrivileges = ' Uwaga: Uprawnienia MySQL s� oznaczone w j�z. angielskim ';
$strError = 'B��d';
$strExplain = 'Wyja�nienie SQL';
$strExport = 'Eksport';
$strExportToXML = 'Eksport do formatu XML';
$strExtendedInserts = 'Rozszerzone dodania';
$strExtra = 'Dodatkowy';

$strFailedAttempts = 'Nieudane pr�by';
$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s zosta�o usuni�te';
$strFields = 'Pola';
$strFieldsEmpty = ' Pole count jest puste! ';
$strFieldsEnclosedBy = 'Pola zawarte w';
$strFieldsEscapedBy = 'Pola poprzedzone przez';
$strFieldsTerminatedBy = 'Pola oddzielane przez';
$strFileCouldNotBeRead = 'Nie mo�na odczyta� pliku';
$strFixed = 'sta�y';
$strFlushPrivilegesNote = 'Uwaga: phpMyAdmin pobiera uprawnienia u�ytkik�w wprost z tabeli uprawnie� MySQL-a. Zawarto�� tej tabeli mo�e r�ni� si� od uprawnie� jakich u�ywa serwer, je�li zosta�y dokonane w niej r�czne zmiany. W takim przypadku powiniene� %sprze�adowa� uprawnienia%s przed dalsz� prac�.';
$strFlushTable = 'Prze�adowanie tabeli ("FLUSH")';
$strFormEmpty = 'Brakuj�ca warto�� w formularzu!';
$strFormat = 'Format';
$strFullText = 'Pe�ny tekst';
$strFunction = 'Funkcja';

$strGenBy = 'Wygenerowany przez';
$strGenTime = 'Czas wygenerowania';
$strGeneralRelationFeat = 'Og�lne funkcje relacyjne';
$strGlobalPrivileges = 'Globalne uprawnienia';
$strGlobalValue = 'Warto�� globalna';
$strGo = 'Wykonanie';
$strGrantOption = 'Nadanie';
$strGrants = 'Nadanie';
$strGzip = '".gz"';

$strHasBeenAltered = 'zosta�o zamienione.';
$strHasBeenCreated = 'zosta�o utworzone.';
$strHaveToShow = 'Musisz wybra� przynajmniej jedn� kolumn� do wy�wietlenia';
$strHome = 'Wej�cie';
$strHomepageOfficial = 'Oficjalna strona phpMyAdmina';
$strHomepageSourceforge = 'Pobranie wersji Sourceforge phpMyAdmina';
$strHost = 'Host';
$strHostEmpty = 'Brak nazwy hosta!';

$strId = 'ID';
$strIdxFulltext = 'Pe�ny tekst';
$strIfYouWish = 'Prosze poda� list� kolumn rozdzielon� przecinkami aby za�adowa� tylko wybrane kolumny.';
$strIgnore = 'Ignoruj';
$strIgnoringFile = 'Plik %s jest ignorowany';
$strImportDocSQL = 'Import plik�w docSQL';
$strImportFiles = 'Import plik�w';
$strImportFinished = 'Import zako�czony';
$strInUse = 'w u�yciu';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Klucz %s zosta� usuni�ty';
$strIndexName = 'Nazwa indeksu :';
$strIndexType = 'Rodzaj indeksu :';
$strIndexes = 'Indeksy';
$strInsecureMySQL = 'Tw�j plik konfiguracyjny zawiera ustawienia (konto roota bez has�a), kt�re odpowiadaja domy�lnemu uprzywilejowanemu kontu MySQL. Tw�j serwer MySQL dzia�a z takim domy�lnym ustawieniem, jest otwarty dla w�amywaczy i naprawd� ta luka w bezpiecze�stwie powinna zosta� naprawiona.';
$strInsert = 'Dodanie';
$strInsertAsNewRow = 'Dodanie jako nowego rekordu';
$strInsertNewRow = 'Dodanie nowego rekordu';
$strInsertTextfiles = 'Dodanie pliku tekstowego do tabeli';
$strInsertedRows = 'Wprowadzone rekordy:';
$strInstructions = 'Instrukcje';
$strInvalidName = '"%s" jest s�owem zarezerwowanym, nie mo�na u�y� go jako nazwy bazy danych/tabeli/pola.';

$strJustDelete = 'Po prostu usuni�cie u�ytkownik�w z tabeli uprawnie�.';
$strJustDeleteDescr = 'Nim uprawnienia zostan� prze�adowane, &quot;usuni�ci&quot; u�ytkownicy nadal b�d� mieli dotychczasowy dost�p do serwera.';

$strKeepPass = 'Nie zmieniaj has�a';
$strKeyname = 'Nazwa klucza';
$strKill = 'Zabicie';

$strLaTeX = 'LaTeX';
$strLandscape = 'Orientacja pozioma';
$strLength = 'D�ugo��';
$strLengthSet = 'D�ugo��/Warto�ci*';
$strLimitNumRows = 'rekord�w na stronie';
$strLineFeed = 'Kod wysuni�cia linii: \\n';
$strLines = 'Linie';
$strLinesTerminatedBy = 'Linie zako�czone przez';
$strLinkNotFound = 'Link nie znaleziony';
$strLinksTo = 'Linki do';
$strLocalhost = 'Host lokalny';
$strLocationTextfile = 'Lokalizacja pliku tekstowego';
$strLogPassword = 'Has�o:';
$strLogUsername = 'U�ytkownik:';
$strLogin = 'Login';
$strLoginInformation = 'Informacje o zalogowanym u�ytkowniku';
$strLogout = 'Wylogowanie';

$strMissingBracket = 'Brakuj�cy nawias';
$strModifications = 'Modyfikacje zosta�y zapami�tane';
$strModify = 'Modifikacja';
$strModifyIndexTopic = 'Modyfikacja indeksu';
$strMoreStatusVars = 'Wi�cej zmiennych statusu';
$strMoveTable = 'Przeniesienie tabeli do (bazadanych<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s zosta�a przeniosna do %s.';
$strMySQLCharset = 'System kodowania znak�w dla MySQL';
$strMySQLReloaded = 'MySQL prze�adowany.';
$strMySQLSaid = 'MySQL zwr�ci� komunikat: ';
$strMySQLServerProcess = 'MySQL %pma_s1% uruchomiony na %pma_s2% jako %pma_s3%';
$strMySQLShowProcess = 'Pokazuj procesy';
$strMySQLShowStatus = 'Informacje o stanie serwera MySQL';
$strMySQLShowVars = 'Zmienne systemowe serwera MySQL';

$strName = 'Nazwa';
$strNext = 'Nast�pne';
$strNo = 'Nie';
$strNoDatabases = 'Brak baz danych';
$strNoDescription = 'brak opisu';
$strNoDropDatabases = 'Polecenie "DROP DATABASE" jest zablokowane.';
$strNoExplain = 'Pomi� wyja�nienie SQL';
$strNoFrames = 'phpMyAdmin jest bardziej przyjazny w przegl�darkach <b>obs�uguj�cych ramki</b>';
$strNoIndex = 'Brak zdefiniowanego indeksu!';
$strNoIndexPartsDefined = 'Brak zdefiniowanych cz�ci indeksu!';
$strNoModification = 'Bez zmian';
$strNoPassword = 'Brak has�a';
$strNoPhp = 'bez kodu PHP';
$strNoPrivileges = 'Brak uprawnie�';
$strNoQuery = 'Brak zapytania SQL!';
$strNoRights = 'Brak wystarczajacych uprawnie�!';
$strNoTablesFound = 'Nie znaleziono tabeli w bazie danych.';
$strNoUsersFound = 'Nie znaleziono u�ytkownika(�w).';
$strNoUsersSelected = '�adny u�ytkownik nie zosta� wybrany.';
$strNoValidateSQL = 'Pomi� sprawdzanie poprawno�ci SQL';
$strNone = 'Brak';
$strNotNumber = 'To nie jest liczba!';
$strNotOK = 'b��d';
$strNotSet = 'Tabela <b>%s</b> nie zosta�a znaleziona lub nie jest ustawiona w %s';
$strNotValidNumber = ' nie jest poprawnym numerem rekordu!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s trafie� wewn�trz tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>W sumie:</b> <i>%s</i> trafie�';
$strNumTables = 'Tabele';

$strOK = 'OK';
$strOftenQuotation = 'Znaki cudzys�owu. OPCJONALNIE oznacza, �e tylko pola char oraz varchar s� zawarte w "cudzys�owach".';
$strOperations = 'Operacje';
$strOptimizeTable = 'Optymalizacja tabeli';
$strOptionalControls = 'Opcjonalnie. Okre�lenie w jaki spos�b zapisa� lub odczyta� znaki specjalne.';
$strOptionally = 'OPCJONALNIE';
$strOptions = 'Opcje';
$strOr = 'Lub';
$strOriginalInterface = 'oryginalny interfejs';
$strOverhead = 'Nadmiar';

$strPHP40203 = 'U�ywasz PHP w wersji 4.2.3, kt�ra ma powa�ny b��d w obs�udze napis�w wielobajtowych (mbstring). Zobacz raport na temat b��d�w PHP nr 19404. Nie zaleca si� u�ywania tej wersji PHP z phpMyAdminem.';
$strPHPVersion = 'Wersja PHP';
$strPageNumber = 'Numer strony:';
$strPartialText = 'Skr�cony tekst';
$strPassword = 'Has�o';
$strPasswordChanged = 'Has�o dla %s zosta�o pomy�lnie zmienione.';
$strPasswordEmpty = 'Puste has�o!';
$strPasswordNotSame = 'Has�a nie s� identyczne!';
$strPdfDbSchema = 'Schemet bazy danych "%s" - strona %s';
$strPdfInvalidPageNum = 'Niezdefiniowany numer strony PDF!';
$strPdfInvalidTblName = 'Tabela "%s" nie istnieje!';
$strPdfNoTables = 'Brak tabel';
$strPerHour = 'na godzin�';
$strPhp = 'Utw�rz kod PHP';
$strPmaDocumentation = 'Dokumentacja phpMyAdmina';
$strPmaUriError = 'Dyrektywa <tt>$cfg[\'PmaAbsoluteUri\']</tt> musi by� ustawiona w pliku konfiguracyjnym!';
$strPortrait = 'Orientacja pionowa';
$strPos1 = 'Pocz�tek';
$strPrevious = 'Poprzednie';
$strPrimary = 'Podstawowy';
$strPrimaryKey = 'Podstawowy klucz';
$strPrimaryKeyHasBeenDropped = 'Klucz podstawowy zosta� usuni�ty';
$strPrimaryKeyName = 'Nazw� podstawowego klucza musi by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musi</b> by� nazw� <b>jedynie</b> klucza podstawowego!)';
$strPrint = 'Drukowanie';
$strPrintView = 'Widok do wydruku';
$strPrivDescAllPrivileges = 'Zawiera wszystkie uprawnienia, opr�cz GRANT.';
$strPrivDescAlter = 'Pozwala zmienia� struktur� istniej�cych tabel.';
$strPrivDescCreateDb = 'Pozwala tworzy� nowe bazy danych i tabele.';
$strPrivDescCreateTbl = 'Pozwala tworzy� nowe tabele.';
$strPrivDescCreateTmpTable = 'Pozwala tworzy� tabele tymczasowe.';
$strPrivDescDelete = 'Pozwala usuwa� dane.';
$strPrivDescDropDb = 'Pozwala usuwa� bazy danych i tabele.';
$strPrivDescDropTbl = 'Pozwala usuwa� tabele.';
$strPrivDescExecute = 'Pozwala uruchamia� zapami�tane procedury; Nie ma �adnych skutk�w w tej wersji MySQL.';
$strPrivDescFile = 'Pozwala importowa� i eksportowa� dane z/do plik�w.';
$strPrivDescGrant = 'Pozwala dodawa� u�ytkownik�w i nadawa� uprawnienia bez prze�adowywania tabeli uprawnie�.';
$strPrivDescIndex = 'Pozwala tworzy� i usuwa� indeksy.';
$strPrivDescInsert = 'Pozwala wstawia� i zamienia� dane.';
$strPrivDescLockTables = 'Pozwala blokowa� tabele dla aktualnego w�tku.';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Pozwala unicestwia� procesy innych u�ytkownik�w.';
$strPrivDescProcess4 = 'Pozwala zobaczy� pe�n� list� zapyta� na li�cie proces�w.';
$strPrivDescReferences = 'Nie ma �adnych skutk�w w tej wersji MySQL.';
$strPrivDescReload = 'Pozwala prze�adowywa� ustawienia serwera i opr�nia� pami�� podr�czn� serwera.';
$strPrivDescReplClient = 'Nadaje u�ytkownikowi prawo, by zapyta� gdzie s� serwery podrz�dne / nadrz�dne.';
$strPrivDescReplSlave = 'Potrzebne dla replikacji serwera podrz�dnego.';
$strPrivDescSelect = 'Pozwala czyta� dane.';
$strPrivDescShowDb = 'Daje dost�p do pe�nej listy baz danych.';
$strPrivDescShutdown = 'Pozwala zamkn�� serwer.';
$strPrivDescSuper = 'Pozwala na po��czenie, nawet je�li osi�gni�ta zosta�a maskymalna ilo�� po��cze�; Wymagana dla wi�kszo�� operacji administracyjnych, takich jak ustawianie zmiennych globalnych czy unicestwianie w�tk�w innych u�ytkownik�w.';
$strPrivDescUpdate = 'Pozwala zmienia� dane.';
$strPrivDescUsage = 'Brak uprawnie�.';
$strPrivileges = 'Uprawnienia';
$strPrivilegesReloaded = 'Uprawnienia zosta�y pomy�lnie prze�adowane.';
$strProcesslist = 'Lista proces�w';
$strProperties = 'W�asciwo�ci';
$strPutColNames = 'Umie�� nazwy p�l w pierwszym rekordzie';

$strQBE = 'Zapytanie przez przyk�ad';
$strQBEDel = 'Usu�';
$strQBEIns = 'Wstaw';
$strQueryOnDb = 'Zapytanie SQL dla bazy danych <b>%s</b>:';
$strQueryStatistics = '<b>Statystyki zapyta�</b>: Od rozpocz�cia jego pracy, do serwera zosta�o wys�anych %s zapyta�.';
$strQueryType = 'Rodzaj zapytania';

$strReType = 'Ponownie';
$strReceived = 'Otrzymane';
$strRecords = 'Rekordy';
$strReferentialIntegrity = 'Sprawdzenie sp�jno�ci powi�za�:';
$strRelationNotWorking = 'Dodatkowe mo�liwo�ci pracy z po��czonymi tabelami zosta�y wy��czone. Aby dowiedzie� si�, dlaczego - kliknij %stutaj%s.';
$strRelationView = 'Widok relacyjny';
$strRelationalSchema = 'Schemat relacyjny';
$strReloadFailed = 'Nie powiod�o si� prze�adowanie MySQL.';
$strReloadMySQL = 'Prze�adowanie MySQL';
$strReloadingThePrivileges = 'Prze�adowanie uprawnie�';
$strRememberReload = 'Prosz� pami�ta� o prze�adowaniu serwera.';
$strRemoveSelectedUsers = 'Usuni�cie zaznaczonych u�ytkownik�w';
$strRenameTable = 'Zmiana nazwy tabeli na';
$strRenameTableOK = 'Tabela %s ma zmienion� nazw� na %s';
$strRepairTable = 'Naprawienie tabeli';
$strReplace = 'Zamiana';
$strReplaceTable = 'Zamiana danych tabeli z plikiem';
$strReset = 'Reset';
$strResourceLimits = 'Ograniczenia zasob�w';
$strRevoke = 'Cofni�cie';
$strRevokeAndDelete = 'Cofni�cie wszystkich aktywnych uprawnie� u�ytkownikom, a nast�pnie ich usuni�cie.';
$strRevokeAndDeleteDescr = 'Nim uprawnienia zostan� prze�adowane, u�ytkownicy nadal b�d� mieli uprawnienie USAGE.';
$strRevokeGrant = 'Cofni�cie uprawnie�';
$strRevokeGrantMessage = 'Cofni�te zosta�y uprawnienia dla %s';
$strRevokeMessage = 'Cofni�te zosta�y uprawnienia dla %s';
$strRevokePriv = 'Cofni�cie uprawnie�';
$strRowLength = 'D�ugo�� rekordu';
$strRowSize = ' Rozmiar rekordu ';
$strRows = 'Rekord�w';
$strRowsFrom = 'rekord�w pocz�wszy od';
$strRowsModeHorizontal = 'poziomo';
$strRowsModeOptions = 'w trybie %s powt�rz nag��wki po %s kom�rkach';
$strRowsModeVertical = 'pionowo';
$strRowsStatistic = 'Statystyka rekord�w';
$strRunQuery = 'Wykonanie zapytania';
$strRunSQLQuery = 'Wykonanie zapytania/zapyta� SQL do bazy danych %s';
$strRunning = 'uruchomiony na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Istnieje szanse, �e w�a�nie znalaz�e� b��d w analizatorze sk�adni SQL. Zbadaj bli�ej swoje zapytanie i sprawd�, czy cudzys�owy s� poprawne i dobrze sparowane. Inn� mo�liw� przyczyn� niepowodzenia mo�e by� to, �e wysy�asz plik ze znakami binarnymi poza obszarem tekstu uj�tego w cudzys�owy. Mo�esz r�wnie� sprawdzi� swoje zapytanie SQL poprzez lini� polece� MySQL. W znalezieniu przyczyny problemu mo�e pom�� tak�e - je�li si� pojawi - poni�szy opis b��du serwera MySQL. Je�li nadam masz problemy lub analizator sk�adni zg�asza usterk� a linia polece� - nie, ogranicz sekwencj� zapyta� SQL do pojedynczego, kt�re powoduje problemy i zg�o�� b��d, do��czaj�c fragment danych zawarty w poni�szej sekcji CUT:';
$strSQLParserUserError = 'Wygl�da na to, �e w twoim zapytaniu SQL jest b��d. W znalezieniu przyczyny problemu mo�e pom�� tak�e - je�li si� pojawi - poni�szy opis b��du serwera MySQL.';
$strSQLQuery = 'zapytanie SQL';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Nieprawid�owy identyfikator';
$strSQPBugUnclosedQuote = 'Niezamkni�ty cudzys��w';
$strSQPBugUnknownPunctuation = 'Nieznany znak przestankowy';
$strSave = 'Zachowanie';
$strScaleFactorSmall = 'Wsp�czynnik skali jest za ma�y, by schemat zmie�ci� si� na jednej stronie';
$strSearch = 'Szukaj';
$strSearchFormTitle = 'Szukaj w bazie danych';
$strSearchInTables = 'Wewn�trz tabel(i):';
$strSearchNeedle = 'Szukane s�owo (s�owa) lub warto�� (warto�ci)  (symbol wieloznaczny: "%"):';
$strSearchOption1 = 'przynajmniej jedno ze s��w';
$strSearchOption2 = 'wszystkie s�owa';
$strSearchOption3 = 'ca�a fraza';
$strSearchOption4 = 'jako wyra�enie regularne';
$strSearchResultsFor = 'Szukaj w rezultatach dla "<i>%s</i>" %s:';
$strSearchType = 'Znajd�:';
$strSelect = 'Wyb�r';
$strSelectADb = 'Prosz� wybra� baz� danych';
$strSelectAll = 'Zaznaczenie wszystkich';
$strSelectFields = 'Wyb�r p�l (co najmniej jedno):';
$strSelectNumRows = 'w zapytaniu';
$strSelectTables = 'Wybierz tabele';
$strSend = 'wys�anie';
$strSent = 'Wys�ane';
$strServer = 'Serwer %s';
$strServerChoice = 'Wyb�r serwera';
$strServerStatus = 'Informacje o dzia�aniu serwera';
$strServerStatusUptime = 'Ten serwer MySQL dzia�a przez %s. Rozpocz�cie jego pracy: %s.';
$strServerTabProcesslist = 'Procesy';
$strServerTabVariables = 'Zmienne';
$strServerTrafficNotes = '<b>Ruch na serwerze</b>: Poni�sze tabele pokazuj� statystyki ruchu na tym serwerze MySQL od rozpocz�cia jego pracy.';
$strServerVars = 'Zmienne i ustawienia serwera';
$strServerVersion = 'Wersja serwera';
$strSessionValue = 'Warto�� sesji';
$strSetEnumVal = 'Je�eli pole jest typu "ENUM" lub "SET", warto�ci wprowadza si� w formacie: \'a\',\'b\',\'c\'...<br />Je�eli potrzeba wprowadzi� odwrotny uko�nik ("\") lub apostrof ("\'"), nale�y je poprzedzi� odwrotnym uko�nikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strShow = 'Pokazanie';
$strShowAll = 'Pokazanie wszystkiego';
$strShowColor = 'Poka� kolor';
$strShowCols = 'Pokazanie kolumn';
$strShowDatadictAs = 'Format s�ownika danych';
$strShowGrid = 'Poka� siatk�';
$strShowPHPInfo = 'Informacje o PHP';
$strShowTableDimension = 'Poka� wymiary tabel';
$strShowTables = 'Pokazanie tabel';
$strShowThisQuery = ' Ponowne wywo�anie tego zapytania ';
$strShowingRecords = 'Pokazanie rekord�w ';
$strSingly = '(pojedynczo)';
$strSize = 'Rozmiar';
$strSort = 'Sortuj';
$strSpaceUsage = 'Wykorzystanie przestrzeni';
$strSplitWordsWithSpace = 'S�owa s� rozdzielane znakiem spacji (" ").';
$strStatement = 'Cecha';
$strStatus = 'Status';
$strStrucCSV = 'dane CSV';
$strStrucData = 'Struktura i dane';
$strStrucDrop = 'Dodanie \'drop table\'';
$strStrucExcelCSV = 'CSV dla MS Excel';
$strStrucOnly = 'Tylko struktura';
$strStructPropose = 'Propozycja struktury tabeli';
$strStructure = 'Struktura';
$strSubmit = 'Wys�anie';
$strSuccess = 'Zapytanie SQL zosta�o pomy�lnie wykonane';
$strSum = 'Suma';

$strTable = 'Tabela';
$strTableComments = 'Komentarze tabeli';
$strTableEmpty = 'Brak nazwy tabeli!';
$strTableHasBeenDropped = 'Tabela %s zosta�a usuni�ta';
$strTableHasBeenEmptied = 'Tabela %s zosta�a opr�niona';
$strTableHasBeenFlushed = 'Tabela %s zosta�a prze�adowana';
$strTableMaintenance = 'Zarz�dzanie tabel�';
$strTableOfContents = 'Spis tre�ci';
$strTableStructure = 'Struktura tabeli dla ';
$strTableType = 'Typ tabeli';
$strTables = '%s tabel(a)';
$strTblPrivileges = 'Uprawenienia specyficzna dla tabel';
$strTextAreaLength = ' To pole mo�e nie by� edytowalne,<br /> z powodu swojej d�ugo�ci ';
$strTheContent = 'Zawarto�� pliku zosta�a do��czona.';
$strTheContents = 'Zawarto�� pliku zastapi�a dane wybranej tabeli, kt�rych podstawowy lub unikalny klucz by� identyczny.';
$strTheTerminator = 'Znak rozdzielaj�cy pola.';
$strThisHost = 'Ten host';
$strThisNotDirectory = 'To nie by� katalog';
$strThreadSuccessfullyKilled = 'W�tek %s zosta� pomy�lnie unicestwiony.';
$strTime = 'Czas';
$strTotal = 'wszystkich';
$strTotalUC = 'Sumarycznie';
$strTraffic = 'Ruch';
$strType = 'Typ';

$strUncheckAll = 'Odznaczenie wszystkich';
$strUnique = 'Unikalny';
$strUnselectAll = 'Odznaczenie wszystkich';
$strUpdatePrivMessage = 'Uaktualni�e� uprawnienia dla %s.';
$strUpdateProfile = 'Uaktualnienie profilu:';
$strUpdateProfileMessage = 'Profil zosta� uaktualniony.';
$strUpdateQuery = 'Zmiana zapytania';
$strUsage = 'Wykorzystanie';
$strUseBackquotes = 'U�ycie cudzys�ow�w z nazwami tabel i p�l';
$strUseTables = 'U�ycie tabel';
$strUseTextField = 'U�ycie pola tekstowego';
$strUser = 'U�ytkownik';
$strUserAlreadyExists = 'U�ytkownik %s ju� istnieje!';
$strUserEmpty = 'Brak nazwy u�ytkownika!';
$strUserName = 'Nazwa u�ytkownika';
$strUserNotFound = 'Wybrany u�ytkownik nie zosta� znaleziony w tabeli uprawnie�.';
$strUserOverview = 'Opis u�ytkownika';
$strUsers = 'U�ytkownicy';
$strUsersDeleted = 'Wybrani u�ytkownicy zostali pomy�lnie usuni�ci.';

$strValidateSQL = 'Sprawdzanie proprawno�ci SQL';
$strValidatorError = 'Analizator sk�adni SQL nie m�g� zosta� zainicjalizowany. Sprawd�, czy zainstalowane s� niezb�dne rozszerzenia php, tak jak zosta�o to opisane w %sdokumentacji%s.';
$strValue = 'Warto��';
$strVar = 'Zmienna';
$strViewDump = 'Zrzut tabeli';
$strViewDumpDB = 'Zrzut bazy danych';

$strWebServerUploadDirectory = 'katalog serwera www dla uploadu';
$strWebServerUploadDirectoryError = 'Katalog ustalony dla uploadu jest nieosi�galny';
$strWelcome = 'Witamy w %s';
$strWithChecked = 'Zaznaczone:';
$strWritingCommentNotPossible = 'Zapisanie komentarza nie jest mo�liwe';
$strWritingRelationNotPossible = 'Zapisanie relacji nie jest mo�liwe';
$strWrongUser = 'B��dne pola u�ytkownik/has�o. Brak dost�pu.';

$strYes = 'Tak';

$strZeroRemovesTheLimit = 'Uwaga: Ustawienie tych opcji na 0 (zero) usuwa ograniczenie.';
$strZip = '".zip"';
// To translate

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
