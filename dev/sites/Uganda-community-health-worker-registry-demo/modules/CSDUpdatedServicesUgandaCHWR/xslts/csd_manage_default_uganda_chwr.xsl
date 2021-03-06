<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:csd="urn:ihe:iti:csd:2013"
    exclude-result-prefixes="xs" version="1.0">

    <xsl:param name="rootProviderURN"/>
    <xsl:param name="rootFacilityURN"/>
    <xsl:param name="rootOrganizationURN"/>
    <xsl:param name="sourceDirectory"/>
    <xsl:param name="cadreCodingScheme"/>
    <xsl:param name="id_typeCodingScheme"/>
    <xsl:param name="councilCodingScheme"/>
    <xsl:param name="jobCodingScheme"/>
    <xsl:param name="languageCodingScheme"/>
    <xsl:param name="classificationCodingScheme"/>
    <xsl:param name="currentDateTime"/>

    <xsl:variable name="iscoCoding08Scheme">urn:org:ilo:isco:08</xsl:variable> 
    <xsl:variable name="iscoCoding88Scheme">urn:org:ilo:isco:88</xsl:variable>    
    <xsl:variable name="workContactPointScheme">urn:ihe:iti:csd:2013:contactPoint</xsl:variable> 
    <xsl:variable name="workAddressType">Practice</xsl:variable>
    <xsl:variable name="homeAddressType">Home</xsl:variable>
    <xsl:variable name="workMobileType">BP</xsl:variable> 
    <xsl:variable name="workPhoneType">BP</xsl:variable> 
    <xsl:variable name="workFaxType">FAX</xsl:variable> 
    <xsl:variable name="workEmailType">EMAIL</xsl:variable>

    <xsl:output method="xml" version="1.0" encoding="UTF-8" indent="yes"  omit-xml-declaration="yes"/>

    <xsl:template match="/">
                <xsl:for-each
		    select="/relationship | /relationshipCollection/relationship">
                    <xsl:variable name="providerurn">urn:uuid:<xsl:value-of select="normalize-space(form[@name='person']/field[@name='csd_uuid']/text())"/></xsl:variable>
                    <xsl:variable name="created"><xsl:value-of select="translate(normalize-space(form[@name='person']/@created),' ','T')"/></xsl:variable>
                    <xsl:variable name="modified"><xsl:value-of select="$currentDateTime"/></xsl:variable>
                    <xsl:variable name="workContact" select="joinedForms/joinedForm[@report_form_name='person_contact_work']"/>
                    <xsl:variable name="homeContact" select="joinedForms/joinedForm[@report_form_name='person_contact_personal']"/>
                    <xsl:variable name="demographic" select="joinedForms/joinedForm[@report_form_name='demographic']"/>
                    <xsl:variable name="positions" select="joinedForms/joinedForm[@report_form_name='person_position']/joinedForms/joinedForm[@report_form_name='position']"/>
                    <xsl:variable name="person_villages" select="joinedForms/joinedForm[@report_form_name='person_village']"/>
                    <xsl:variable name="languages" select="joinedForms/joinedForm[@report_form_name='person_language']/joinedForms/joinedForm[@report_form_name='language']"/>               
                    <xsl:variable name="person_ids" select="joinedForms/joinedForm[@report_form_name='person_id']"/>                  
                    
                    <csd:provider>                           
                        <xsl:attribute name="entityID"><xsl:value-of select="$providerurn"/></xsl:attribute>
			<csd:otherID>
			  <xsl:attribute name='assigningAuthorityName'><xsl:value-of select="$sourceDirectory"/></xsl:attribute>
			  <xsl:attribute name='code'>urn:ihris.org:form:person</xsl:attribute>
			  <xsl:value-of select="normalize-space(string(form[@name='person']/@id))"/>
			</csd:otherID>
             
         <!-- National ID is comming from the Person form -->
            <csd:otherID>
			  <xsl:attribute name='assigningAuthorityName'><xsl:value-of select="$sourceDirectory"/></xsl:attribute>
			  <xsl:attribute name='code'>NIN</xsl:attribute>
			  <xsl:value-of select="normalize-space(string(form[@name='person']/field[@name='national_id']/text()))"/>
			</csd:otherID>

                        <xsl:for-each select="$person_ids">                        
			  <xsl:variable name='idnum'><xsl:value-of select="normalize-space(form[@name='person_id']/field[@name='id_num']/text())"/></xsl:variable>
			  <!-- SHOULD REALLY BE A CODE-->
			  <xsl:variable name='idcode'><xsl:value-of select="normalize-space(form[@name='person_id']/field[@name='id_type']/value/text())"/></xsl:variable>
			  <xsl:if test="$idnum != '' and $idcode != ''">
			    <csd:otherID>
			      <xsl:attribute name='assigningAuthorityName'><xsl:value-of select="$id_typeCodingScheme"/></xsl:attribute>
			      <xsl:attribute name='code'><xsl:value-of select="$idcode"/></xsl:attribute>
			      <xsl:value-of select="$idnum"/>
			    </csd:otherID>
			  </xsl:if>
			</xsl:for-each>



                        <xsl:for-each select="joinedForms/joinedForm[
					      @report_form_name='person_position'
					      and 
					      not(
					      joinedForms/joinedForm[@report_form_name='position']/form[@name='position']/field[@name='job']/value
					       =
					      preceding-sibling::joinedForm[@report_form_name='person_position']/joinedForms/joinedForm[@report_form_name='position']/form[@name='position']/field[@name='job']/value
					      )
					      ]/joinedForms/joinedForm[@report_form_name='position']/form[@name='position']/field[@name='job']/value">
			  <xsl:variable name='job'><xsl:value-of select="../../../joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='code']"/></xsl:variable>
			  <xsl:if test="$job != ''">
			    <csd:codedType>
                              <xsl:attribute name="code"><xsl:value-of select="$job"/></xsl:attribute>
                              <xsl:attribute name="codingScheme"><xsl:value-of select="$jobCodingScheme"/></xsl:attribute>
                            </csd:codedType>
			  </xsl:if>
			</xsl:for-each>


                        <xsl:for-each select="joinedForms/joinedForm[
					      @report_form_name='person_position'
					      and 
					      not(
					      joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='classification']/value
					       =
					      preceding-sibling::joinedForm[@report_form_name='person_position']/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='classification']/value
					      )
					      ]/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='classification']/value">
			  <xsl:variable name='classification'><xsl:value-of select="../../../joinedForms/joinedForm[@report_form_name='classification']/form[@name='classification']/field[@name='code']"/></xsl:variable>
			  <csd:codedType>
                            <xsl:attribute name="code"><xsl:value-of select="$classification"/></xsl:attribute>
                            <xsl:attribute name="codingScheme"><xsl:value-of select="$classificationCodingScheme"/></xsl:attribute>
                          </csd:codedType>
			</xsl:for-each>


  
                        <xsl:for-each select="joinedForms/joinedForm[
					      @report_form_name='person_position'
					      and 
					      not(
					      joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='cadre']/value
					       =
					      preceding-sibling::joinedForm[@report_form_name='person_position']/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='cadre']/value
					      )
					      ]/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='cadre']/value">
			  <!-- REALLY SHOULD BE USING CODES -->
			  <xsl:variable name='cadre'><xsl:value-of select="../../../joinedForms/joinedForm[@report_form_name='cadre']/form[@name='cadre']/@id"/></xsl:variable>
			  <csd:codedType>
                            <xsl:attribute name="code"><xsl:value-of select="$cadre"/></xsl:attribute>
                            <xsl:attribute name="codingScheme"><xsl:value-of select="$cadreCodingScheme"/></xsl:attribute>
                          </csd:codedType>
			</xsl:for-each>
  



                        <xsl:for-each select="joinedForms/joinedForm[
					      @report_form_name='person_position'
					      and 
					      not(
					      joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='isco_08_unit']/value
					       =
					      preceding-sibling::joinedForm[@report_form_name='person_position']/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='isco_08_unit']/value
					      )
					      ]/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='isco_08_unit']/value">
			  <!-- REALLY SHOULD BE USING CODES -->
			  <xsl:variable name='isco_08_unit'><xsl:value-of select="../../../joinedForms/joinedForm[@report_form_name='isco_08']/form[@name='isco_08_unit']/@id"/></xsl:variable>
			  <csd:codedType>
                            <xsl:attribute name="code"><xsl:value-of select="$isco_08_unit"/></xsl:attribute>
                            <xsl:attribute name="codingScheme"><xsl:value-of select="$iscoCoding08Scheme"/></xsl:attribute>
                          </csd:codedType>
			</xsl:for-each>



                        <xsl:for-each select="joinedForms/joinedForm[
					      @report_form_name='person_position'
					      and 
					      not(
					      joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='isco_88_unit']/value
					       =
					      preceding-sibling::joinedForm[@report_form_name='person_position']/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='isco_88_unit']/value
					      )
					      ]/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='isco_88_unit']/value">
			  <xsl:variable name='isco_88_unit'><xsl:value-of select="../../../joinedForms/joinedForm[@report_form_name='isco_88']/form[@name='isco_88_unit']/@id"/></xsl:variable>
			  <csd:codedType>
                            <xsl:attribute name="code"><xsl:value-of select="$isco_88_unit"/></xsl:attribute>
                            <xsl:attribute name="codingScheme"><xsl:value-of select="$iscoCoding88Scheme"/></xsl:attribute>
                          </csd:codedType>
			</xsl:for-each>


                        <csd:demographic>
                            <csd:name>
                                <xsl:variable name='surname'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='surname']/text())"/></xsl:variable>
                                <xsl:variable name='othername'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='othername']/text())"/></xsl:variable>
                                <xsl:variable name='forename'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='firstname']/text())"/></xsl:variable>
                                <xsl:variable name='honorific'><xsl:value-of select="normalize-space(joinedForms/joinedForm[@report_form_name='person_title']/form[@name='person_title']/field[@name='name']/text())"/></xsl:variable>
                                <xsl:if test="$forename != '' and $surname != ''">
                                    <xsl:if test="$honorific != '' ">
                                        <csd:commonName><xsl:value-of select="$honorific"/><xsl:text> </xsl:text><xsl:value-of select="$surname"/></csd:commonName>
                                        <csd:commonName><xsl:value-of select="$honorific"/><xsl:text> </xsl:text><xsl:value-of select="$forename"/><xsl:text> </xsl:text><xsl:value-of select="$surname"/></csd:commonName>
                                        <csd:commonName><xsl:value-of select="$honorific"/><xsl:text> </xsl:text><xsl:value-of select="$surname"/></csd:commonName>                                          
                                        <xsl:if test="$othername != ''">
                                            <csd:commonName><xsl:value-of select="$honorific"/> <xsl:value-of select="$forename"/> <xsl:value-of select="$othername"/> <xsl:value-of select="$surname"/></csd:commonName>         
                                        </xsl:if>
                                    </xsl:if>
                                    <xsl:if test="$othername != '' ">
                                        <csd:commonName><xsl:value-of select="$forename"/><xsl:text> </xsl:text><xsl:value-of select="$othername"/><xsl:text> </xsl:text><xsl:value-of select="$surname"/></csd:commonName>
                                        <csd:commonName><xsl:value-of select="$othername"/><xsl:text> </xsl:text><xsl:value-of select="$surname"/></csd:commonName>
                                    </xsl:if>
                                    <csd:commonName><xsl:value-of select="$forename"/><xsl:text> </xsl:text><xsl:value-of select="$surname"/></csd:commonName>
                                </xsl:if>                               
                                <xsl:if test="$surname != ''">
                                    <csd:surname><xsl:value-of select="$surname"/></csd:surname>
                                </xsl:if>                                
                                <xsl:if test="$honorific != ''">
                                    <csd:forename><xsl:value-of select="$honorific"/></csd:forename>
                                </xsl:if>
                                <xsl:if test="$forename != ''">
                                    <csd:forename><xsl:value-of select="$forename"/></csd:forename>
                                </xsl:if>                               
                                <xsl:if test="$surname != ''">
                                    <csd:forename><xsl:value-of select="$surname"/></csd:forename>
                                </xsl:if>
                            </csd:name>
                            
                            <xsl:variable name='alt_telephone'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='alt_telephone']/text())"/></xsl:variable>
                            <xsl:variable name='mobile'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='mobile_phone']/text())"/></xsl:variable>                                 
                            <xsl:variable name='email'><xsl:value-of select="normalize-space($workContact/form[@name='person_contact_work']/field[@name='email']/text())"/></xsl:variable>                                  
                            <xsl:variable name='gender'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='gender']/value/text())"/></xsl:variable>
                            <xsl:variable name='dob_Y'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='birth_date']/year/text())"/></xsl:variable>
                            <xsl:variable name='dob_M'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='birth_date']/month/text())"/></xsl:variable>
                            <xsl:variable name='dob_D'><xsl:value-of select="normalize-space(form[@name='person']/field[@name='birth_date']/day/text())"/></xsl:variable>
                            <xsl:variable name='dob'>
                                <xsl:if test="$dob_Y != '' and $dob_Y != '0' and $dob_M != '' and $dob_M != '0' and $dob_D != '' and $dob_D != '0'  ">
                                       <xsl:value-of select="$dob_Y"/>-<xsl:value-of select="$dob_M"/>-<xsl:value-of select="$dob_D"/>
                                   </xsl:if>
                            </xsl:variable>
                            <xsl:if test="$mobile != ''">
                                <csd:contactPoint><csd:codedType>
                                    <xsl:attribute name='codingScheme'><xsl:value-of select="$workContactPointScheme"/></xsl:attribute>
                                    <xsl:attribute name="code"><xsl:value-of select="$workMobileType"/></xsl:attribute>
                                    <xsl:value-of select="$mobile"/>
                                </csd:codedType></csd:contactPoint>
                            </xsl:if>                       
                            <xsl:if test="$alt_telephone !=''">
                                <csd:contactPoint><csd:codedType>
                                    <xsl:attribute name='codingScheme'><xsl:value-of select="$workContactPointScheme"/></xsl:attribute>
                                    <xsl:attribute name="code"><xsl:value-of select="$workPhoneType"/></xsl:attribute>
                                    <xsl:value-of select="$alt_telephone"/>
                                </csd:codedType></csd:contactPoint>
                            </xsl:if>
                            <xsl:if test="$email != ''">
                                <csd:contactPoint><csd:codedType>
                                    <xsl:attribute name='codingScheme'><xsl:value-of select="$workContactPointScheme"/></xsl:attribute>
                                    <xsl:attribute name="code"><xsl:value-of select="$workEmailType"/></xsl:attribute>
                                    <xsl:value-of select="$email"/>
                                </csd:codedType></csd:contactPoint>
                            </xsl:if>
                            <xsl:if test="$gender != ''">
                                <csd:gender><xsl:value-of select="$gender"/></csd:gender>
                            </xsl:if>
                            <xsl:if test="$dob !=''">
                                <csd:dateOfBirth><xsl:value-of select="$dob"/></csd:dateOfBirth>
                            </xsl:if>
                        </csd:demographic>
                        <xsl:for-each select="$languages">
                            <xsl:variable name='language'><xsl:value-of select="normalize-space(form[@name='language']/field[@name='name']/text())"/></xsl:variable>
                            <!-- SHOULD REALLY BE LANGUAGE CODE-->                            
                            <xsl:variable name='languageCode'><xsl:value-of select="normalize-space(form[@name='language']/@id)"/></xsl:variable>
                            <xsl:if test="$languageCode !=''">
                                <csd:language>
                                  <xsl:attribute name='codingScheme'><xsl:value-of select="$languageCodingScheme"/></xsl:attribute>
                                  <xsl:attribute name="code"><xsl:value-of select="$languageCode"/></xsl:attribute>

                                  <xsl:value-of select="$language"/>
                                </csd:language>                            
                            </xsl:if>
                        </xsl:for-each>
                        <csd:organizations>
                            <csd:organization>
                                <xsl:attribute name="entityID"><xsl:value-of select="$rootOrganizationURN"/>:health_workers</xsl:attribute>
                            </csd:organization>
                        </csd:organizations>
                        <csd:facilities>
                            <xsl:for-each select="$positions">
                                <xsl:variable name="facility_id"><xsl:value-of select="joinedForms/joinedForm[@report_form_name='facility']/form[@name='facility']/field[@name='csd_uuid']/text()"/></xsl:variable>
				<xsl:variable name="facility_urn">urn:uuid:<xsl:value-of select="normalize-space($facility_id)"/></xsl:variable>
                                <xsl:variable name="csd_facility"><xsl:value-of select="joinedForms/joinedForm[@report_form_name='facility']/form[@name='facility']/field[@name='csd_facility']"/></xsl:variable>
                                <xsl:variable name='start_date_Y'><xsl:value-of select="normalize-space(../../form[@name='person_position']/field[@name='start_date']/year/text())"/></xsl:variable>
                                <xsl:variable name='start_date_M'><xsl:value-of select="normalize-space(../../form[@name='person_position']/field[@name='start_date']/month/text())"/></xsl:variable>
                                <xsl:variable name='start_date_D'><xsl:value-of select="normalize-space(../../form[@name='person_position']/field[@name='start_date']/day/text())"/></xsl:variable>
                                <xsl:variable name='end_date_Y'><xsl:value-of select="normalize-space(../../form[@name='person_position']/field[@name='end_date']/year/text())"/></xsl:variable>
                                <xsl:variable name='end_date_M'><xsl:value-of select="normalize-space(../../form[@name='person_position']/field[@name='end_date']/month/text())"/></xsl:variable>
                                <xsl:variable name='end_date_D'><xsl:value-of select="normalize-space(../../form[@name='person_position']/field[@name='end_date']/day/text())"/></xsl:variable>
                                <xsl:variable name='start_date'>
                                    <xsl:if test="$start_date_D != '' and  $start_date_D != '0' and $start_date_M !='' and $start_date_M != '0' and $start_date_Y!='' and $start_date_Y != '0'">
                                        <xsl:value-of select="$start_date_Y"/>-<xsl:value-of select="$start_date_M"/>-<xsl:value-of select="$start_date_D"/>
                                    </xsl:if>
                                </xsl:variable>
                                <xsl:variable name='end_date'>
                                    <xsl:if test="$end_date_D!='' and $end_date_D != '0' and $end_date_M !='' and $end_date_M != '0' and $end_date_Y !='' and $end_date_Y != '0'">
                                        <xsl:value-of select="$end_date_Y"/>-<xsl:value-of select="$end_date_M"/>-<xsl:value-of select="$end_date_D"/>
                                    </xsl:if>
                                </xsl:variable>
                                <xsl:if test="$facility_id!='' and $facility_id != 'NULL'">
                                    <csd:facility>
                                        <xsl:attribute name="entityID"><xsl:value-of select="$facility_urn"/></xsl:attribute>
                                        <xsl:if test="$start_date!=''">
                                            <csd:operatingDate>
                                                <csd:beginEffectiveDate><xsl:value-of select="$start_date"/></csd:beginEffectiveDate>
                                                <xsl:if test="$end_date!=''">
                                                    <csd:endEffectiveDate><xsl:value-of select="$end_date"/></csd:endEffectiveDate>
                                                </xsl:if>
                                            </csd:operatingDate>
                                        </xsl:if>
                                    </csd:facility>
                                </xsl:if>
                                <xsl:if test="$csd_facility!='' and $csd_facility != 'NULL' and $csd_facility != 'csd_facility|0'">
                                    <csd:facility>
                                        <xsl:attribute name="entityID"><xsl:value-of select="$csd_facility"/></xsl:attribute>
                                        <xsl:if test="$start_date!=''">
                                            <csd:operatingDate>
                                                <csd:beginEffectiveDate><xsl:value-of select="$start_date"/></csd:beginEffectiveDate>
                                                <xsl:if test="$end_date!=''">
                                                    <csd:endEffectiveDate><xsl:value-of select="$end_date"/></csd:endEffectiveDate>
                                                </xsl:if>
                                            </csd:operatingDate>
                                        </xsl:if>
                                    </csd:facility>
                                </xsl:if>
                            </xsl:for-each>
                        </csd:facilities>
                        <csd:extension type="position" urn="urn:ihe:iti:csd:2013">
                            <xsl:for-each select="$positions">
                                <xsl:variable name='end_date_M'><xsl:value-of select="normalize-space(../../form[@name='person_position']/field[@name='end_date']/month/text())"/></xsl:variable>
                                <xsl:if test="$end_date_M = '0' or $end_date_M = ''">
                                    <position><xsl:attribute name="title"><xsl:value-of select="normalize-space(form[@name='position']/field[@name='title']/text())"/></xsl:attribute>
                                    <xsl:value-of select="normalize-space(joinedForms/joinedForm[@report_form_name='job']/form[@name='job']/field[@name='title']/text())"/></position>

                                </xsl:if>
                            </xsl:for-each>
                        </csd:extension>
                        <csd:extension type="district" urn="urn:ihe:iti:csd:2013">
                            <xsl:variable name="district"><xsl:value-of select="normalize-space(joinedForms/joinedForm[@report_form_name='person_position']/joinedForms/joinedForm[@report_form_name='position']/joinedForms/joinedForm[@report_form_name='facility']/joinedForms/joinedForm[@report_form_name='district']/form[@name='district']/field[@name='name']/text())"/></xsl:variable>
                            <xsl:if test="$district!=''">
                              <district><xsl:attribute name="name"><xsl:value-of select="$district"/></xsl:attribute></district>
                            </xsl:if>
                         </csd:extension>
                        <xsl:for-each select="$person_villages">
                        <csd:extension type="parish" urn="urn:ihe:iti:csd:2013">
                            <xsl:variable name="parish"><xsl:value-of select="normalize-space(joinedForms/joinedForm[@report_form_name='parish']/field[@name='name']/text())"/></xsl:variable>
                            <xsl:if test="$parish!=''">
                              <parish><xsl:attribute name="name"><xsl:value-of select="$parish"/></xsl:attribute></parish>
                            </xsl:if>
                         </csd:extension>
                        <csd:extension type="village" urn="urn:ihe:iti:csd:2013">
                            <xsl:variable name="village"><xsl:value-of select="normalize-space(joinedForms/joinedForm[@report_form_name='village']/field[@name='name']/text())"/></xsl:variable>
                            <xsl:if test="$village!=''">
                              <district><xsl:attribute name="name"><xsl:value-of select="$village"/></xsl:attribute></district>
                            </xsl:if>
                         </csd:extension>
                        </xsl:for-each>
                       
			<csd:record>
			  <xsl:attribute name='created'><xsl:value-of select="$created"/></xsl:attribute>
			  <xsl:attribute name='updated'><xsl:value-of select="$modified"/></xsl:attribute>
			  <xsl:attribute name='sourceDirectory'><xsl:value-of select="$sourceDirectory"/></xsl:attribute>
			  <xsl:attribute name='status'>
			    <xsl:choose>
				<xsl:when test="count($positions) >  0">106-001</xsl:when>
				<xsl:otherwise>106-002</xsl:otherwise>
			    </xsl:choose>
			  </xsl:attribute>
			</csd:record>
                    </csd:provider>
                </xsl:for-each>
    </xsl:template>
</xsl:stylesheet>
