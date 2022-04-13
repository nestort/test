
# About test
1.1. Empleados de la empresa B.
 ---
<code>
SELECT 
	employees.id as 'id employee',
    concat(employees.first_name,' ',employees.last_name) AS 'full_name',
	companies.name as 'name company'
FROM contracts
JOIN employees ON employees.id=contracts.employee_id
JOIN companies ON companies.id=contracts.company_id
WHERE companies.name='Empresa B'
GROUP BY employees.id;
</code>
<img alt="terminal output" src="./outputs/1.png">

1.2. Empleados que tengan antigüedad mayor o igual a 2 años y a que empresa pertenecen.
 ---
<code>
SELECT 
	employees.id,
	concat(employees.first_name,' ',employees.last_name) AS 'full_name',
    companies.name
FROM contracts 
JOIN employees ON employees.id=contracts.employee_id
JOIN companies ON companies.id=contracts.company_id
WHERE contracts.begin <= DATE_SUB(NOW(),INTERVAL 2 YEAR);
</code>
<img alt="terminal output" src="./outputs/2.png">

1.3. Departamentos de todas las empresas pero que no se repitan.
 ---
<code>
SELECT departments.name FROM departments GROUP BY departments.name;
</code>
<img alt="terminal output" src="./outputs/3.png">

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
