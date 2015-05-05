window.translations = {
	held: {},
	DouglasCounty: {
		translate: function(o) {
			if (o.CSZ) {
				var commaSplit = o.CSZ.value.split(",");
				var CITY = commaSplit[0];
				var stateZip = commaSplit[1];
				var stateZipSplit = stateZip.split(" ");

				var STATE = stateZipSplit[0];
				var ZIP = stateZipSplit[1];
				var cityObj = {value: CITY};
				var stateObj = {value: STATE};
				var zipObj = {value: ZIP};

			} else {
				var CITY = null, STATE = null, ZIP = null; 
			}
			//query on maptaxlot, queryVal holds actual query val
			var tempJson = {
				mapNumber: null,
				account: o.PROP_ID,
				taxcode: null,
				inCareOf: null,
				ownerAddress1: o.ADDR1,
				ownerAddress2: o.ADDR2,
				ownerAddress3: o.ADDR3,
				ownerCity: cityObj,
				ownerState: stateObj,
				ownerZip: zipObj,
				numberOwners: null,
				ownerName: o.NAME,
				impValue: o.TOTAL_IMP,
				landValue: o.TOTAL_LAND,
				totalValue: o.TOTAL_MARK.value,
				yearBuilt: o.INST_NO,
				taxLot: o.TAXID,
				buildingType: null,
				exemptDescription: null,
				propertyClassCode: o.COUNTY_PRO,
				propertyClassDescription: null,
				stateClassCodeOrBuildCode: null,
				stateClassDescription: null,
				acreage: o.ACREAGE,
				assesedtaxableValue: o.ASSD_VALUE,
				assesedImpTaxable: null,
				assesedLandTaxable: null,
				mapTaxLotNumber: null,
				zoning: o.CODE_AREA,
				landUseNumber: null,
				planDescription: null,
				fireDistrict: null,
				schoolDistrict: null,
				nieghborHood: o.NBHD_CODE,
				queryVal: o.ID
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	},
	JacksonCounty: {
		translate: function(o) {
			if (o.ASSESIMP && o.ASSESLAND){
				var assesedTaxableValue = parseInt(o.ASSESIMP.value) + parseInt(o.ASSESLAND.value);
			} else {
				var assesedTaxableValue = null;
			}

			if (o.IMPVALUE && o.LANDVALUE){
				var totalValue = parseInt(o.IMPVALUE.value) + parseInt(o.LANDVALUE.value);
			} else {
				var totalValue = null;
			}
			//query on ACCOUNT, queryVal holds actual query val
			var tempJson = {
				mapNumber: o.MAPNUMBER,
				account: o.ACCOUNT,
				taxcode: o.TAXCODE,
				inCareOf: o.INCAREOF,
				ownerAddress1: o.SITEADD,
				ownerAddress2: o.ADDRESS1,
				ownerAddress3: o.ADDRESS2,
				ownerCity: o.CITY,
				ownerState: o.STATE,
				ownerZip: o.ZIPCODE,
				numberOwners: null,
				ownerName: o.FEEOWNER,
				impValue: o.IMPVALUE,
				landValue: o.LANDVALUE,
				totalValue: totalValue,
				yearBuilt: o.YEARBLT,
				taxLot: o.TAXLOT,
				buildingType: null,
				exemptDescription: null,
				propertyClassCode: o.PROPCLASS,
				propertyClassDescription: null,
				stateClassCodeOrBuildCode: o.BUILDCODE,
				stateClassDescription: null,
				acreage: o.ACREAGE,
				assesedtaxableValue: {value: assesedTaxableValue},
				assesedImpTaxable: o.ASSESIMP,
				assesedLandTaxable: o.ASSESLAND,
				mapTaxLotNumber: o.TM_MAPLOT,
				zoning: null,
				landUseNumber: null,
				planDescription: null,
				fireDistrict: null,
				schoolDistrict: null,
				nieghborHood: o.NEIGHBORHO,
				queryVal: o.ACCOUNT
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	},
	LaneCounty: {
		translate: function(o) {
			if (o.impval && o.landval){
				var totalValue = parseInt(o.impval.value) + parseInt(o.landval.value);
			} else {
				var totalValue = null;
			}
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
				stateClassCodeOrBuildCode: o.statecl,
				stateClassDescription: o.statecldes,
				acreage: o.mapacres,
				assesedtaxableValue: o.assdtotval,
				assesedImpTaxable: null,
				assesedLandTaxable: null,
				mapTaxLotNumber: o.maptaxlot,
				zoning: o.zoning,
				landUseNumber: o.numlanduse,
				planDescription: o.plandesc,
				fireDistrict: o.firedist,
				schoolDistrict: o.schooldist,
				nieghborHood: o.nieghbor,
				queryVal: o.maptaxlot
			};

			window.translations.held = tempJson;
			return tempJson;

		}
	}
};