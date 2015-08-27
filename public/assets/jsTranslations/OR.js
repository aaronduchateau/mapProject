window.translations = {
	held: {},
	//DouglasCountyMap: ["cartodb_id","acreage","addr1","addr2","addr3","allaccount","alt_acct_n","assd_value","block","code_area","county_pro","csz","id","inst_no","legal","loc_code","lot","maint_area","mtl_acreag","name","nbhd_code","owner_id","prop_id","special_in","taxid","total_imp","total_land","total_mark","created_at","updated_at"],

	DouglasCounty: {
		nameColumn: "name",
		acreageColumn: "acreage",
		mapTaxLotColumn: "taxid",
		impValue: "total_imp",
		landValue: "total_land",
		mapArr: ["cartodb_id","acreage","addr1","addr2","addr3","allaccount","alt_acct_n","assd_value","block","code_area","county_pro","csz","id","inst_no","legal","loc_code","lot","maint_area","mtl_acreag","name","nbhd_code","owner_id","prop_id","special_in","taxid","total_imp","total_land","total_mark","created_at","updated_at"],
		translate: function(o) {
			if (o.csz) {
				var commaSplit = o.csz.split(",");
				var CITY = commaSplit[0];
				var stateZip = commaSplit[1];
				var stateZipSplit = stateZip.split(" ");

				var STATE = stateZipSplit[0];
				var ZIP = stateZipSplit[1];
				var cityObj = CITY;
				var stateObj = STATE;
				var zipObj = ZIP;

			} else {
				var CITY = null, STATE = null, ZIP = null; 
			}
			//query on maptaxlot, queryVal holds actual query val
			var tempJson = {
				mapNumber: null,
				account: o.prop_id,
				taxcode: null,
				inCareOf: null,
				ownerAddress1: o.addr1,
				ownerAddress2: o.addr2,
				ownerAddress3: o.addr3,
				ownerCity: cityObj,
				ownerState: stateObj,
				ownerZip: zipObj,
				numberOwners: null,
				ownerName: o.name,
				impValue: o.total_imp,
				landValue: o.total_land,
				totalValue: o.total_mark,
				yearBuilt: o.inst_no,
				taxLot: o.taxid,
				buildingType: null,
				exemptDescription: null,
				propertyClassCode: o.county_pro,
				propertyClassDescription: null,
				stateClassCodeOrBuildCode: null,
				stateClassDescription: null,
				acreage: o.acreage,
				assesedtaxableValue: o.assd_value,
				assesedImpTaxable: null,
				assesedLandTaxable: null,
				mapTaxLotNumber: o.taxid,
				zoning: o.code_area,
				landUseNumber: null,
				planDescription: null,
				fireDistrict: null,
				schoolDistrict: null,
				nieghborHood: o.nbhd_code,
				//queryVal: o.id
				queryVal: {name: 'id', val: o.id, type: 'number'}
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	},

	//JacksonCountyMap: ["cartodb_id", "account", "acreage", "address1", "address2", "addressnum", "addsort", "assessimp", "assessland","buildcode", "city", "commsqft", "contract", "feeowner", "gis_area", "impvalue", "incareof", "landvalue", "lotdepth", "lottype", "lotwidth", "maintenanc", "maplot", "mapnum", "mapnumber", "neighborho", "ownersort", "propclass", "scheduleco", "shape_star", "shape_stle", "siteadd", "state", "streetname", "taxcode", "taxlot", "tm_maplot", "trssort", "yearblt", "zipcode", "created_at", "updated_at"], 

	JacksonCounty: {
		nameColumn: "feeowner",
		acreageColumn: "acreage",
		mapTaxLotColumn: "tm_maplot",
		impValue: "impvalue",
		landValue: "landvalue",
		mapArr: ["cartodb_id", "account", "acreage", "address1", "address2", "addressnum", "addsort", "assessimp", "assessland","buildcode", "city", "commsqft", "contract", "feeowner", "gis_area", "impvalue", "incareof", "landvalue", "lotdepth", "lottype", "lotwidth", "maintenanc", "maplot", "mapnum", "mapnumber", "neighborho", "ownersort", "propclass", "scheduleco", "shape_star", "shape_stle", "siteadd", "state", "streetname", "taxcode", "taxlot", "tm_maplot", "trssort", "yearblt", "zipcode", "created_at", "updated_at"],
		translate: function(o) {
			//should add different logic here to account for zero vals
			if (o.assessimp && o.assessland){
				var assesedTaxableValue = parseInt(o.assessimp) + parseInt(o.assessland);
			} else {
				var assesedTaxableValue = null;
			}

			if (o.impvalue && o.landvalue){
				var totalValue = parseInt(o.impvalue) + parseInt(o.landvalue);
			} else {
				var totalValue = null;
			}
			//query on ACCOUNT, queryVal holds actual query val
			var tempJson = {
				mapNumber: o.mapnumber,
				account: o.account,
				taxcode: o.taxcode,
				inCareOf: o.incareof,
				ownerAddress1: o.siteadd,
				ownerAddress2: o.address1,
				ownerAddress3: o.address2,
				ownerCity: o.city,
				ownerState: o.state,
				ownerZip: o.zipcode,
				numberOwners: null,
				ownerName: o.feeowner,
				impValue: o.impvalue,
				landValue: o.landvalue,
				totalValue: totalValue,
				yearBuilt: o.yearblt,
				taxLot: o.taxlot,
				buildingType: null,
				exemptDescription: null,
				propertyClassCode: o.propclass,
				propertyClassDescription: null,
				stateClassCodeOrBuildCode: o.buildcode,
				stateClassDescription: null,
				acreage: o.acreage,
				assesedtaxableValue: assesedTaxableValue,
				assesedImpTaxable: o.assessimp,
				assesedLandTaxable: o.assessland,
				mapTaxLotNumber: o.tm_maplot,
				zoning: null,
				landUseNumber: null,
				planDescription: null,
				fireDistrict: null,
				schoolDistrict: null,
				nieghborHood: o.neighborho,
				queryVal: {name: 'account', val: o.account, type: 'number'}
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	},

	JosephineCounty: {
		nameColumn: "name",
		acreageColumn: "acreage",
		mapTaxLotColumn: "taxlot",
		impValue: "imp_value",
		landValue: "land_mkt",
		mapArr: ["cartodb_id", "account", "acctstatus", "acreage", "addr1", "addr2", "addr3", "address", "appr_value", "assd_value", "bedrms", "bldg_class", "block", "city", "code", "comp_mtl", "csz", "deed_type", "exempt", "gis_zone", "imp_value", "inst_no", "land_appr", "land_mkt", "legal_acre", "living_are", "loc_desc", "lot", "maint", "mapnum", "mapnumx", "mh_make", "mh_value", "mnx", "name", "nbhd", "prop_class", "qq", "rmv", "rng", "sale_date", "sale_price", "sale_type", "sd", "sec", "situs", "situs_pref", "situs_suf0", "situs_suff", "sptb_codes", "sq_ft", "st_name", "st_no", "state", "taxes", "taxlot", "tl", "twn", "type", "yr_blt", "zip", "zone", "created_at", "updated_at"],
		translate: function(o) {
			//query on ACCOUNT, queryVal holds actual query val
			var tempJson = {
				mapNumber: o.mapnum,
				account: o.account,
				taxcode: o.code,
				inCareOf: null,
				ownerAddress1: o.addr1,
				ownerAddress2: o.addr2,
				ownerAddress3: o.addr3,
				ownerCity: o.city,
				ownerState: o.state,
				ownerZip: o.zip,
				numberOwners: null,
				ownerName: o.name,
				impValue: o.imp_value,
				landValue: o.land_mkt,
				totalValue: o.appr_value,
				yearBuilt: o.yr_blt,
				taxLot: o.taxlot,
				buildingType: o.deed_type,
				exemptDescription: o.exempt,
				propertyClassCode: o.prop_class,
				propertyClassDescription: null,
				stateClassCodeOrBuildCode: o.bldg_class,
				stateClassDescription: null,
				acreage: o.acreage,
				assesedtaxableValue: o.assd_value,
				//could not find another db value for impvalue
				assesedImpTaxable: o.impvalue,
				assesedLandTaxable: o.land_appr,
				mapTaxLotNumber: o.mapnumx,
				zoning: o.zone,
				landUseNumber: null,
				planDescription: null,
				fireDistrict: null,
				schoolDistrict: null,
				nieghborHood: o.nbhd,
				queryVal: {name: 'account', val: o.account, type: 'string'}
				//data also provides real market value, taxes paid last year, and other interesting data
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	},
	
	//LaneCountyMap: ["cartodb_id", "mapnumber", "acctno", "taxcode", "addr1", "addr2", "addr3", "ownercity", "ownerprvst", "ownerzip", "numowners", "ownname", "impval", "landval", "yearblt", "taxlot", "bldgtype", "exemptdesc", "propcl", "propcldes", "statcl", "statcldes", "mapacres", "assdtotval", "maptaxlot", "zoning", "numlanduse", "plandes", "firedist", "schooldist", "neighbor", "created_at", "updated_at"],
	LaneCounty: {
		nameColumn: "ownname",
		acreageColumn: "mapacres",
		mapTaxLotColumn: "maptaxlot",
		impValue: "impval",
		landValue: "landval",
		mapArr: ["cartodb_id", "mapnumber", "acctno", "taxcode", "addr1", "addr2", "addr3", "ownercity", "ownerprvst", "ownerzip", "numowners", "ownname", "impval", "landval", "yearblt", "taxlot", "bldgtype", "exemptdesc", "propcl", "propcldes", "statcl", "statcldes", "mapacres", "assdtotval", "maptaxlot", "zoning", "numlanduse", "plandes", "firedist", "schooldist", "neighbor", "created_at", "updated_at"],
		translate: function(o) {
			//if (o.impval && o.landval){
				var totalValue = parseInt(o.impval) + parseInt(o.landval);
			//} else {
			//	var totalValue = null;
			//}
			//query on maptaxlot, queryVal holds actual query val
			var tempJson = {
				mapNumber: o.mapnumber,
				account: o.acctno,
				taxcode: o.taxcode,
				inCareOf: null,
				ownerAddress1: o.addr1,
				ownerAddress2: o.addr2,
				ownerAddress3: o.addr3,
				ownerCity: o.ownercity,
				ownerState: o.ownerprvst,
				ownerZip: o.ownerzip,
				numberOwners: o.numowners,
				ownerName: o.ownname,
				impValue: o.impval,
				landValue: o.landval,
				totalValue: totalValue,
				yearBuilt: o.yearblt,
				taxLot: o.taxlot,
				buildingType: o.bldgtype,
				exemptDescription: o.exemptdesc,
				propertyClassCode: o.propcl,
				propertyClassDescription: o.propcldes,
				stateClassCodeOrBuildCode: o.statcl,
				stateClassDescription: o.statcldes,
				acreage: o.mapacres,
				assesedtaxableValue: o.assdtotval,
				assesedImpTaxable: null,
				assesedLandTaxable: null,
				mapTaxLotNumber: o.maptaxlot,
				zoning: o.zoning,
				landUseNumber: o.numlanduse,
				planDescription: o.plandes,
				fireDistrict: o.firedist,
				schoolDistrict: o.schooldist,
				nieghborHood: o.neighbor,
				queryVal: {name: 'maptaxlot', val: o.maptaxlot, type: 'number'}
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	}
};