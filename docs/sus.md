# Managing a Software Update Server (SUS)


## Setting Up the SUS

<p align="center"><img src="images/attachments/sus_no_branches.png" width="500"></p>

4. Create at least one branch by typing a branch name in the New Branch field and clicking Add. Repeat as needed for each branch.

## Syncing with Apple's Software Update Server



3. Sync the list of available software updates manually, or choose a time to sync the list each day.

<p align="center"><img src="images/attachments/sus_with_branch.png" width="500"></p>
	
## Configuring SUS Branches


* Automatically enable new software updates.

<p align="center"><img src="images/attachments/sus_branch_upper.png" width="500"></p>
5. Click Apply below the list of software updates.

<p align="center"><img src="images/attachments/sus_branch_lower.png" width="500"></p>
	
# Using the SUS with the Casper Suite




* Use a configuration profile




### Pointing Computers at a SUS Branch Using a Configuration Profile









	
	defaults write /Library/Preferences com.apple.SoftwareUpdate CatalogURL <Branch URL>





	http://sus.mycompany.corp/content/catalogs/others/index-leopard.merged-1_<Branch Name>.sucatalog
		

	http://sus.mycompany.corp/content/catalogs/others/index-leopard-snowleopard.merged-1_<Branch Name>.sucatalog


	http://sus.mycompany.corp/content/catalogs/others/index-lion-snowleopard-leopard.merged-1_<Branch Name>.sucatalog
**OS X v10.8**

	http://sus.mycompany.corp/content/catalogs/others/index-mountainlion-lion-snowleopard-leopard. merged-1_<Branch Name>.sucatalog
	

	http://sus.mycompany.corp/content/catalogs/others/index-10.9-mountainlion-lion-snowleopard- leopard.merged-1_<Branch Name>.sucatalog
	

	http://sus.mycompany.corp/content/catalogs/others/index-10.10-10.9-mountainlion-lion-snowleopard-leopard.merged-1_name>.sucatalog
	

	http://sus.mycompany.corp/content/catalogs/others/index-10.11-10.10-10.9-mountainlion-lion- snowleopard-leopard.merged-1_name>.sucatalog
	

