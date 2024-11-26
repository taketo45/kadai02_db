
const selectAllUrl = 'http://localhost/kadai02_db/selectAll.php';

const selectUrl = 'http://localhost/kadai02_db/select.php';

const updateUrl = 'http://localhost/kadai02_db/update.php';

const insertUrl = 'http://localhost/kadai02_db/insert.php';

const deleteUrl = 'http://localhost/kadai02_db/delete.php';

const postData = {};

//1ページ辺りの表示項目数のデフォルト
const maxitems = 20;

const selectAll = "SELECT * FROM `vocabulary`";

const selectLimit = "SELECT * FROM `vocabulary` LIMIT ?";

const selectLimitParam =  [ maxitems ];

const selectChecked = "SELECT * FROM `vocabulary` WHERE level = ?";
