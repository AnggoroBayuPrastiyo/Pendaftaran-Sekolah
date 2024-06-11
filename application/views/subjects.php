<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/subjects.css'); ?>">
</head>
<body>
<div class="container">
    <nav>
				<h3 class="logo">Administrator</h3>
				<ul>
          <li><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
          <li><a href="<?= site_url('classes'); ?>">Classes</a></li>
          <li><a href="<?= site_url('subjects'); ?>">Subjects</a></li>
          <li><a href="<?= site_url('studentaddnew'); ?>">Student Add New</a></li>
          <li><a href="<?= site_url('studentlist'); ?>">Student List</a></li>
				</ul>
			</nav>
      <div class="main-content">
        <div class="judul-page-halaman">
          <h4 class="judul">Sistem Laporan Siswa Online</h4>
          <h3 class="judul-page">Subjects</h3>
        </div>
        <div class="content">
          <div class="search-container">
            <input type="text" placeholder="Search.." />
          </div>

          <div class="add-new">
            <button>+ Add New</button>
          </div>

          <table>
            <tr>
              <th>#</th>
              <th>Code</th>
              <th>Subjects</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>1</td>
              <td>1103</td>
              <td>Science</td>
              <td>Science</td>
              <td class="action">
                <button>✔</button>
                <button class="delete">🗑️</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>1102</td>
              <td>English</td>
              <td>History</td>
              <td class="action">
                <button>✔</button>
                <button class="delete">🗑️</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>1101</td>
              <td>Math</td>
              <td>Mathematics</td>
              <td class="action">
                <button>✔</button>
                <button class="delete">🗑️</button>
              </td>
            </tr>
          </table>

          <div class="pagination">
            <button>Previous</button>
            <button>1</button>
            <button>Next</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
