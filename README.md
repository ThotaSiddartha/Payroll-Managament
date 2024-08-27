
<body>

  <h1>Payroll Management System</h1>
    <p>The Payroll Management System is designed to automate and streamline the payroll process within an organization. This system ensures that all employee-related data, including department details, salary information, and tax deductions, are stored securely and accessed easily when processing payroll. The database schema for this system is carefully crafted to maintain the integrity and accuracy of the data.</p>

  <h2>Key Features</h2>

  <h3>Admin Management</h3>
  <ul>
      <li>The system includes an admin interface where administrators can securely log in using credentials stored in the <strong>Admin_table</strong>. This allows authorized personnel to manage payroll processes and employee data.</li>
  </ul>

  <h3>Employee Management</h3>
  <ul>
      <li>Employee credentials are securely stored in the <strong>employee_table</strong>, ensuring that each employee has a unique identifier and password.</li>
      <li>The <strong>employee</strong> table stores comprehensive details about each employee, including their name, location, department, and date of birth.</li>
      <li>The <strong>employee_mob</strong> table tracks employee mobile numbers, linking them to their respective employee IDs for quick communication.</li>
  </ul>

  <h3>Department Management</h3>
  <ul>
      <li>The <strong>dept</strong> table stores information about different departments within the organization, enabling the system to group employees by department and manage payroll accordingly.</li>
  </ul>

  <h3>Payroll Processing</h3>
  <ul>
      <li>The <strong>Payroll</strong> table is central to the system, storing detailed salary information for each employee. This includes gross salary, net salary, monthly salary details, and reimbursement dates.</li>
      <li>The <strong>salary</strong> table complements the payroll information by storing tax details, provident fund (PF) deductions, and travel allowances for each employee, ensuring accurate and compliant payroll processing.</li>
  </ul>
<h2>Schema</h2>
  <p>Below is a database schema for a Payroll Management System:</p>
<h2>Admin Table</h2>
    <table>
        <tr>
            <th>Column Name</th>
            <th>Data Type</th>
        </tr>
        <tr>
            <td>admin_Name</td>
            <td>varchar (50)</td>
        </tr>
        <tr>
            <td>admin_Password</td>
            <td>varchar (50)</td>
        </tr>
    </table>
<h2>Employee Table</h2>
    <table>
        <tr>
            <th>Column Name</th>
            <th>Data Type</th>
        </tr>
        <tr>
            <td>Emp_id (FOREIGN KEY to TABLE employee)</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>emp_password</td>
            <td>varchar (45)</td>
        </tr>
    </table>
<h2>Department Table (dept)</h2>
    <table>
        <tr>
            <th>Column Name</th>
            <th>Data Type</th>
        </tr>
        <tr>
            <td>dept_id (PRIMARY KEY)</td>
            <td>varchar (50)</td>
        </tr>
        <tr>
            <td>dept_name</td>
            <td>varchar (50)</td>
        </tr>
    </table>
  <h2>Employee Details Table (employee)</h2>
    <table>
        <tr>
            <th>Column Name</th>
            <th>Data Type</th>
        </tr>
        <tr>
            <td>emp_id (PRIMARY KEY)</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>emp_name</td>
            <td>varchar (50)</td>
        </tr>
        <tr>
            <td>emp_state</td>
            <td>varchar (50)</td>
        </tr>
        <tr>
            <td>emp_city</td>
            <td>char (20)</td>
        </tr>
        <tr>
            <td>emp_dob</td>
            <td>varchar (50)</td>
        </tr>
        <tr>
            <td>dept_id (FOREIGN KEY to TABLE dept)</td>
            <td>varchar (50)</td>
        </tr>
    </table>
  <h2>Employee Mobile Table (employee_mob)</h2>
    <table>
        <tr>
            <th>Column Name</th>
            <th>Data Type</th>
        </tr>
        <tr>
            <td>Emp_id (FOREIGN KEY to TABLE employee)</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>Emp_mob</td>
            <td>varchar (10)</td>
        </tr>
    </table>
    <h2>Payroll Table</h2>
    <table>
        <tr>
            <th>Column Name</th>
            <th>Data Type</th>
        </tr>
        <tr>
            <td>Transaction_id (PRIMARY KEY)</td>
            <td>varchar (50)</td>
        </tr>
        <tr>
            <td>Emp_id (FOREIGN KEY from TABLE employee)</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>emp_sal_year</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>emp_month_sal</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>emp_net_sal</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>emp_gross</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>reimbursement_date</td>
            <td>int (50)</td>
        </tr>
    </table>
    <h2>Salary Table</h2>
    <table>
        <tr>
            <th>Column Name</th>
            <th>Data Type</th>
        </tr>
        <tr>
            <td>transaction_id (FOREIGN KEY to TABLE payroll)</td>
            <td>varchar (50)</td>
        </tr>
        <tr>
            <td>emp_id (FOREIGN KEY to TABLE employee)</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>tax_deduction</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>tax_type</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>pf</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>travel_allowance</td>
            <td>int (11)</td>
        </tr>
        <tr>
            <td>reimbursement_date (FOREIGN KEY to TABLE payroll)</td>
            <td>int (11)</td>
        </tr>
    </table>
 </body>
