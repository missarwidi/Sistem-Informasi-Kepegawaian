function bbm_vsocomplete() {
	
  //var kodecabang= Xrm.Page.getAttribute("bbm_businessunit").getValue()[0].id;

  var ViewColumn = MakeStruct("SchemaName Width");
  var entityName = "xts_vehicleorderform"; // Entity to be filtered
  var lookupFieldName = "new_vsono";
  var primaryKeyName = "xts_vehicleorderformid";
  var primaryFieldName = null;
  var orderBy = null;
  var customViewName = "Vehicle Sales Order"; // Custom name for the lookup window.
  var fetchStr = "<fetch version='1.0' output-format='xml-platform' mapping='logical' no-lock='true' distinct='false'>" +
 "<entity name='xts_vehicleorderform'>" +
 "<attribute name='xts_vehicleorderformcode' />" +
 "<attribute name='xts_customeridname' />" +
 "<attribute name='xts_salespersonidname' />" +
 "<attribute name='xts_productdescription' />" +
 "<attribute name='xts_lotseridname' />" +
 "<attribute name='xts_businessunitidname' />" +
 "<attribute name='xts_vehicleorderformid' />" +
 "<attribute name='xts_customerid' />" +
 "<attribute name='xts_paymenttype' />" +
 "<attribute name='xts_productid' />" +
 "<attribute name='xts_vhcregnumber' />" +
 "<order attribute='xts_vehicleorderformcode' descending='false' />" +
 "<filter type='and'>" +
 "<condition attribute='xts_status' operator='in'>" +
  "<value>5</value>" +
  "<value>6</value>" +  
  "<value>9</value>" +
 "</condition>" +
 //"<condition attribute='xts_businessunitid' operator='eq' value='" + kodecabang + "'/>" +
 "</filter>" +
 "</entity>" +
 "</fetch>";

    var viewColumns = [new ViewColumn("xts_vehicleorderformcode", 150), new ViewColumn("xts_customeridname", 300), new ViewColumn("xts_salespersonidname", 100), new ViewColumn("xts_productdescription", 100), new ViewColumn("xts_lotseridname", 100), new ViewColumn("xts_businessunitidname", 100), new ViewColumn("xts_vehicleorderformid", 100), new ViewColumn("xts_customerid", 100), new ViewColumn("xts_paymenttype", 100), new ViewColumn("xts_productid", 100), new ViewColumn("xts_vhcregnumber", 200)];
    AdvancedFilteredLookup(fetchStr, null, lookupFieldName, null, entityName, primaryKeyName, primaryFieldName, customViewName, null, orderBy, 'False', viewColumns);
    document.getElementById(lookupFieldName)._behaviors[0].AddParam("DisableViewPicker", "1");
    document.getElementById(lookupFieldName)._behaviors[0].set_showProperty(1);
}

	var kodecabang= Xrm.Page.getAttribute("bbm_businessunit").getValue()[0].id;
	
    //plato, only show vso no that has been invoiced and vso type = normal/replacement
    var ViewColumn = MakeStruct("SchemaName Width");
    var customViewName = GetMessageText("VSO0000119", Xrm.Page.context.getUserLcid()); //"Vehicle Sales Order";
    var lookupFieldName = "new_vsono";
    var entityName = "xts_vehicleorderform";
    var primaryKeyName = "xts_vehicleorderformid";
    var primaryFieldName = null;
    var orderBy = null;
    var fetchStr =
		"<fetch mapping= 'logical'>" +
		"<entity name='xts_vehicleorderform'>" +
		"<no-attrs />" +
			"<filter type='and'>" +
    //"<condition attribute='xts_status' operator='eq' value='6' />" +
                "<condition attribute='xts_status' operator='in'>";
            	fetchStr +=  "<value>5</value>" +
  							 "<value>6</value>" +  
  							 "<value>9</value>" +;
				fetchStr +=  "</condition>" +
				"<condition attribute='xts_businessunitid' operator='eq' value='" + kodecabang + "'/>" +
			"</filter>" +
		"</entity>" +
		"</fetch>";
    var viewColumns = [new ViewColumn("xts_vehicleorderformcode", 300), new ViewColumn("xts_businessunitid", 100), new ViewColumn("xts_trandate", 100), new ViewColumn("xts_status", 100), new ViewColumn("xts_customerid", 100), new ViewColumn("xts_productid", 100), new ViewColumn("xts_lotserid", 100)];
    AdvancedFilteredLookup(fetchStr, null, lookupFieldName, null, entityName, primaryKeyName, primaryFieldName, customViewName, null, orderBy, 'False', viewColumns);
	document.getElementById(lookupFieldName)._behaviors[0].AddParam("DisableViewPicker", "1");
    document.getElementById(lookupFieldName)._behaviors[0].set_showProperty(1);
