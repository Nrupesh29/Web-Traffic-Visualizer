<img src="http://nrupeshpatel.com/webtraffic/GitHub/logo-wtv.png" width="28%" align="left">
# Web Traffic Visualizer

Web Traffic Visualizer is made using Netflix Vizceral Project to visualize the web traffic data. Data demonstated here is not real and was generated using custom API's. 

<br /><br /><br />
## Demo Link

http://webtraffic.nrupeshpatel.com

## Project Deliverables

[Project Report](deliverables/Project-Report.pdf)

## Demo Data API Calls

BASE URL : http://webtraffic.nrupeshpatel.com/api/v1

### Single Data Center Web Traffic Data

| Request | Endpoint     | Description                 |
|---------|--------------|-----------------------------|
| GET     | `{base_url}/node/one/normal` | Fetch traffic data for single node application with normal traffic |
| GET     | `{base_url}/node/one/warning` | Fetch traffic data for single node application with warning traffic |
| GET     | `{base_url}/node/one/danger` | Fetch traffic data for single node application with danger traffic |

### Two Data Centers Web Traffic Data

| Request | Endpoint     | Description                 |
|---------|--------------|-----------------------------|
| GET     | `{base_url}/node/two/normal` | Fetch traffic data for two node application with normal traffic |
| GET     | `{base_url}/node/two/warning` | Fetch traffic data for two node application with warning traffic |
| GET     | `{base_url}/node/two/danger` | Fetch traffic data for two node application with danger traffic |

### Three Data Centers Web Traffic Data

| Request | Endpoint     | Description                 |
|---------|--------------|-----------------------------|
| GET     | `{base_url}/node/three/normal` | Fetch traffic data for three node application with normal traffic |
| GET     | `{base_url}/node/three/warning` | Fetch traffic data for three node application with warning traffic |
| GET     | `{base_url}/node/three/danger` | Fetch traffic data for three node application with danger traffic |

## Screenshots
<img src="http://nrupeshpatel.com/webtraffic/GitHub/screen%231.png">
<img src="http://nrupeshpatel.com/webtraffic/GitHub/screen%232.png">
<img src="http://nrupeshpatel.com/webtraffic/GitHub/screen%233.png">
<img src="http://nrupeshpatel.com/webtraffic/GitHub/screen%234.png">

## Installation
### AWS Elastic Beanstalk Installation
1. Sign in to [AWS Console] (https://aws.amazon.com/)
2. Select Elastic Beanstalk.
3. Click Create new application.
4. Enter application name and description.
5. Click create new environment.
6. Select Web server environment in Environment tier.
7. Choose PHP in Platform.
8. Select upload your code in Application Code option.
9. Download repository and upload the zip file as Application Code in AWS.
10. Click Create Environment.

### MySQL Database Connection with EBS
1. Open the [RDS Console](https://console.aws.amazon.com/rds).
2. Click Instances and select Launch DB Instance.
3. Select MySQL.
4. Select Dev/Test for Free Tier Usage.
5. Enter following details for Instance Specifications
    * **DB Engine Version** - `5.6.27`
    * **DB Instance Class** - `db.t2.micro`
6. Enter following details for Settings
    * **DB Instance Identifier** - `{your_instance_name}`
    * **Master Username** - `{your_master_username}`
    * **Master Password** - `{your_master_password}`
7. Enter following details for Network & Security
    * **VPC** - Default VPC
    * **Publicly Accessible** - Yes
    * **VPC Security Group(s)** - Create new Security Group
8. Enter Database Name and choose Launch DB Instance
9. Choose the arrow next to the entry for your DB instance to expand the view.
10. Choose the Details tab.
11. In the Security and Network section, the security group associated with the DB instance is shown. Open the link to view the security group in the Amazon EC2 console.
12. In the security group details, choose the Inbound tab.
13. Choose Edit.
14. Choose Add Rule.
15. For Type, choose `MYSQL/Aurora`.
16. For Source, choose Custom IP, and then type the group ID of the security group.
17. Choose Save.
18. Open the [Elastic Beanstalk console] (https://console.aws.amazon.com/elasticbeanstalk).
19. Navigate to the management console for your environment.
20. Choose Configuration.
21. Choose Instances.
22. For EC2 security groups, type a comma after the name of the auto-generated security group followed by the name of the RDS DB instance's security group. By default, the RDS console creates a security group called `rds-launch-wizard`.
23. Choose Apply.
24. Read the warning, and then choose Save.
25. Choose Software Configuration.
26. In the Environment Properties section, define the following:
    * **RDS_DB_NAME** – The DB Name shown in the Amazon RDS console.
    * **RDS_HOSTNAME** – The Endpoint of the DB instance shown in the Amazon RDS console.
    * **RDS_PORT** – The Port shown in the Amazon RDS console.
    * **RDS_USERNAME** – The Master Username that you entered when you added the database to your environment.
    * **RDS_PASSWORD** – The Master Password that you entered when you added the database to your environment.
27. Choose Apply.

### Creating Database Tables
1. Download MySQL Workbench and connect to DB Instance using Endpoint.
2. Download the [`tables.sql`](tables.sql) file from repostitory.
3. Execute the `tables.sql` script after selecting the database.

### URL's after installation
DEMO LINK: `elastic_beanstalk_url` <br />
BASE URL: `{elastic_beanstalk_url}/api/v1/`

## Contributing

1. Search previous suggestions before making a new one, as your's may be a duplicate.
1. Create an issue and describe your idea.
2. [Fork it] (https://github.com/Nrupesh29/Web-Traffic-Visualizer/fork)
3. Create a new branch for your feature (`git checkout -b my-new-feature`)
4. Commit the changes (`git commit -am 'Add some feature'`)
5. Publish the branch (`git push origin my-new-feature`)
6. Create a new Pull Request
7. Done!

Thank you for your suggestions!

## Technologies Used
<img src="http://nrupeshpatel.com/webtraffic/GitHub/vizceral.png" width="12%" /><br /><br />
<img src="http://nrupeshpatel.com/webtraffic/GitHub/slim.png" width="36%" /><br /><br />
<img src="http://nrupeshpatel.com/webtraffic/GitHub/mysql.png" width="16%" />

## License

Web Traffic Visualizer is released under the [MIT License](https://github.com/Nrupesh29/Web-Traffic-Visualizer/blob/master/LICENSE.md).

## Credits

Web Template - [gentelella](https://github.com/puikinsh/gentelella)

## Contributor

| [![Nrupesh Patel](https://avatars.githubusercontent.com/nrupesh29?s=100)<br /><sub>Nrupesh Patel<br />CMPE 272</sub>](https://github.com/Nrupesh29)<br /> |
| :---: |
