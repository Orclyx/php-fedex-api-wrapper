<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Detailed tracking information about a particular package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class TrackDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackDetail';

    /**
     * To report soft error on an individual track detail.
     *
     * @param Notification $notification
     * @return TrackDetail
     */
    public function setNotification(Notification $notification)
    {
        $this->Notification = $notification;
        return $this;
    }
    
    /**
     * Returns To report soft error on an individual track detail.
     *
     * @return Notification
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    
    /**
     * The FedEx package identifier.
     *
     * @param string $trackingNumber
     * @return TrackDetail
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns The FedEx package identifier.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * Set Barcode
     *
     * @param StringBarcode $barcode
     * @return TrackDetail
     */
    public function setBarcode(StringBarcode $barcode)
    {
        $this->Barcode = $barcode;
        return $this;
    }
    
    /**
     * Returns Set Barcode
     *
     * @return StringBarcode
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    
    /**
     * When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @param string $trackingNumberUniqueIdentifier
     * @return TrackDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * Returns When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     *
     * @return string
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    
    /**
     * Specifies details about the status of the shipment being tracked.
     *
     * @param TrackStatusDetail $statusDetail
     * @return TrackDetail
     */
    public function setStatusDetail(TrackStatusDetail $statusDetail)
    {
        $this->StatusDetail = $statusDetail;
        return $this;
    }
    
    /**
     * Returns Specifies details about the status of the shipment being tracked.
     *
     * @return TrackStatusDetail
     */
    public function getStatusDetail()
    {
        return $this->StatusDetail;
    }
    
    /**
     * Set CustomerExceptionRequests
     *
     * @param CustomerExceptionRequestDetail[] $customerExceptionRequests
     * @return TrackDetail
     */
    public function setCustomerExceptionRequests(array $customerExceptionRequests)
    {
        $this->CustomerExceptionRequests = $customerExceptionRequests;
        return $this;
    }
    
    /**
     * Returns Set CustomerExceptionRequests
     *
     * @return CustomerExceptionRequestDetail[]
     */
    public function getCustomerExceptionRequests()
    {
        return $this->CustomerExceptionRequests;
    }
    
    /**
     * Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     *
     * @param TrackReconciliation $reconciliation
     * @return TrackDetail
     */
    public function setReconciliation(TrackReconciliation $reconciliation)
    {
        $this->Reconciliation = $reconciliation;
        return $this;
    }
    
    /**
     * Returns Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     *
     * @return TrackReconciliation
     */
    public function getReconciliation()
    {
        return $this->Reconciliation;
    }
    
    /**
     * Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been cancelled
     *
     * @param string $serviceCommitMessage
     * @return TrackDetail
     */
    public function setServiceCommitMessage($serviceCommitMessage)
    {
        $this->ServiceCommitMessage = $serviceCommitMessage;
        return $this;
    }
    
    /**
     * Returns Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been cancelled
     *
     * @return string
     */
    public function getServiceCommitMessage()
    {
        return $this->ServiceCommitMessage;
    }
    
    /**
     * Set DestinationServiceArea
     *
     * @param string $destinationServiceArea
     * @return TrackDetail
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    
    /**
     * Returns Set DestinationServiceArea
     *
     * @return string
     */
    public function getDestinationServiceArea()
    {
        return $this->DestinationServiceArea;
    }
    
    /**
     * Set DestinationServiceAreaDescription
     *
     * @param string $destinationServiceAreaDescription
     * @return TrackDetail
     */
    public function setDestinationServiceAreaDescription($destinationServiceAreaDescription)
    {
        $this->DestinationServiceAreaDescription = $destinationServiceAreaDescription;
        return $this;
    }
    
    /**
     * Returns Set DestinationServiceAreaDescription
     *
     * @return string
     */
    public function getDestinationServiceAreaDescription()
    {
        return $this->DestinationServiceAreaDescription;
    }
    
    /**
     * Identifies a FedEx operating company (transportation).
     *
     * @param \FedEx\TrackService\SimpleType\CarrierCodeType|string $carrierCode
     * @return TrackDetail
     */
    public function setCarrierCode($carrierCode)
    {
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    
    /**
     * Returns Identifies a FedEx operating company (transportation).
     *
     * @return \FedEx\TrackService\SimpleType\CarrierCodeType|string
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    
    /**
     * Identifies operating transportation company that is the specific to the carrier code.
     *
     * @param \FedEx\TrackService\SimpleType\OperatingCompanyType|string $operatingCompany
     * @return TrackDetail
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    
    /**
     * Returns Identifies operating transportation company that is the specific to the carrier code.
     *
     * @return \FedEx\TrackService\SimpleType\OperatingCompanyType|string
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    
    /**
     * Specifies a detailed description about the carrier or the operating company.
     *
     * @param string $operatingCompanyOrCarrierDescription
     * @return TrackDetail
     */
    public function setOperatingCompanyOrCarrierDescription($operatingCompanyOrCarrierDescription)
    {
        $this->OperatingCompanyOrCarrierDescription = $operatingCompanyOrCarrierDescription;
        return $this;
    }
    
    /**
     * Returns Specifies a detailed description about the carrier or the operating company.
     *
     * @return string
     */
    public function getOperatingCompanyOrCarrierDescription()
    {
        return $this->OperatingCompanyOrCarrierDescription;
    }
    
    /**
     * If the package was interlined to a cartage agent, this is the name of the cartage agent. (Returned for CSR SL only.)
     *
     * @param string $cartageAgentCompanyName
     * @return TrackDetail
     */
    public function setCartageAgentCompanyName($cartageAgentCompanyName)
    {
        $this->CartageAgentCompanyName = $cartageAgentCompanyName;
        return $this;
    }
    
    /**
     * Returns If the package was interlined to a cartage agent, this is the name of the cartage agent. (Returned for CSR SL only.)
     *
     * @return string
     */
    public function getCartageAgentCompanyName()
    {
        return $this->CartageAgentCompanyName;
    }
    
    /**
     * Specifies the FXO production centre contact and address.
     *
     * @param ContactAndAddress $productionLocationContactAndAddress
     * @return TrackDetail
     */
    public function setProductionLocationContactAndAddress(ContactAndAddress $productionLocationContactAndAddress)
    {
        $this->ProductionLocationContactAndAddress = $productionLocationContactAndAddress;
        return $this;
    }
    
    /**
     * Returns Specifies the FXO production centre contact and address.
     *
     * @return ContactAndAddress
     */
    public function getProductionLocationContactAndAddress()
    {
        return $this->ProductionLocationContactAndAddress;
    }
    
    /**
     * Other related identifiers for this package such as reference numbers.
     *
     * @param TrackOtherIdentifierDetail[] $otherIdentifiers
     * @return TrackDetail
     */
    public function setOtherIdentifiers(array $otherIdentifiers)
    {
        $this->OtherIdentifiers = $otherIdentifiers;
        return $this;
    }
    
    /**
     * Returns Other related identifiers for this package such as reference numbers.
     *
     * @return TrackOtherIdentifierDetail[]
     */
    public function getOtherIdentifiers()
    {
        return $this->OtherIdentifiers;
    }
    
    /**
     * (Returned for CSR SL only.)
     *
     * @param string $formId
     * @return TrackDetail
     */
    public function setFormId($formId)
    {
        $this->FormId = $formId;
        return $this;
    }
    
    /**
     * Returns (Returned for CSR SL only.)
     *
     * @return string
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    
    /**
     * Specifies details about service such as service description and type.
     *
     * @param TrackServiceDescriptionDetail $service
     * @return TrackDetail
     */
    public function setService(TrackServiceDescriptionDetail $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Returns Specifies details about service such as service description and type.
     *
     * @return TrackServiceDescriptionDetail
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * The weight of this package.
     *
     * @param Weight $packageWeight
     * @return TrackDetail
     */
    public function setPackageWeight(Weight $packageWeight)
    {
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    
    /**
     * Returns The weight of this package.
     *
     * @return Weight
     */
    public function getPackageWeight()
    {
        return $this->PackageWeight;
    }
    
    /**
     * Physical dimensions of the package.
     *
     * @param Dimensions $packageDimensions
     * @return TrackDetail
     */
    public function setPackageDimensions(Dimensions $packageDimensions)
    {
        $this->PackageDimensions = $packageDimensions;
        return $this;
    }
    
    /**
     * Returns Physical dimensions of the package.
     *
     * @return Dimensions
     */
    public function getPackageDimensions()
    {
        return $this->PackageDimensions;
    }
    
    /**
     * The dimensional weight of the package.
     *
     * @param Weight $packageDimensionalWeight
     * @return TrackDetail
     */
    public function setPackageDimensionalWeight(Weight $packageDimensionalWeight)
    {
        $this->PackageDimensionalWeight = $packageDimensionalWeight;
        return $this;
    }
    
    /**
     * Returns The dimensional weight of the package.
     *
     * @return Weight
     */
    public function getPackageDimensionalWeight()
    {
        return $this->PackageDimensionalWeight;
    }
    
    /**
     * The weight of the entire shipment.
     *
     * @param Weight $shipmentWeight
     * @return TrackDetail
     */
    public function setShipmentWeight(Weight $shipmentWeight)
    {
        $this->ShipmentWeight = $shipmentWeight;
        return $this;
    }
    
    /**
     * Returns The weight of the entire shipment.
     *
     * @return Weight
     */
    public function getShipmentWeight()
    {
        return $this->ShipmentWeight;
    }
    
    /**
     * Retained for legacy compatibility only.
     *
     * @param string $packaging
     * @return TrackDetail
     */
    public function setPackaging($packaging)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Returns Retained for legacy compatibility only.
     *
     * @return string
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    
    /**
     * Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     *
     * @param \FedEx\TrackService\SimpleType\PackagingType|string $packagingType
     * @return TrackDetail
     */
    public function setPackagingType($packagingType)
    {
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Returns Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     *
     * @return \FedEx\TrackService\SimpleType\PackagingType|string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    
    /**
     * The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     *
     * @param nonNegativeInteger $packageSequenceNumber
     * @return TrackDetail
     */
    public function setPackageSequenceNumber($packageSequenceNumber)
    {
        $this->PackageSequenceNumber = $packageSequenceNumber;
        return $this;
    }
    
    /**
     * Returns The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     *
     * @return nonNegativeInteger
     */
    public function getPackageSequenceNumber()
    {
        return $this->PackageSequenceNumber;
    }
    
    /**
     * The number of packages in this shipment.
     *
     * @param nonNegativeInteger $packageCount
     * @return TrackDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Returns The number of packages in this shipment.
     *
     * @return nonNegativeInteger
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    
    /**
     * Specifies the details about the SPOC details.
     *
     * @param TrackChargeDetail[] $charges
     * @return TrackDetail
     */
    public function setCharges(array $charges)
    {
        $this->Charges = $charges;
        return $this;
    }
    
    /**
     * Returns Specifies the details about the SPOC details.
     *
     * @return TrackChargeDetail[]
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    
    /**
     * Set NickName
     *
     * @param string $nickName
     * @return TrackDetail
     */
    public function setNickName($nickName)
    {
        $this->NickName = $nickName;
        return $this;
    }
    
    /**
     * Returns Set NickName
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->NickName;
    }
    
    /**
     * Set Notes
     *
     * @param string $notes
     * @return TrackDetail
     */
    public function setNotes($notes)
    {
        $this->Notes = $notes;
        return $this;
    }
    
    /**
     * Returns Set Notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    
    /**
     * Set Attributes
     *
     * @param TrackDetailAttributeType[] $attributes
     * @return TrackDetail
     */
    public function setAttributes(array $attributes)
    {
        $this->Attributes = $attributes;
        return $this;
    }
    
    /**
     * Returns Set Attributes
     *
     * @return TrackDetailAttributeType[]
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    
    /**
     * Set ShipmentContents
     *
     * @param ContentRecord[] $shipmentContents
     * @return TrackDetail
     */
    public function setShipmentContents(array $shipmentContents)
    {
        $this->ShipmentContents = $shipmentContents;
        return $this;
    }
    
    /**
     * Returns Set ShipmentContents
     *
     * @return ContentRecord[]
     */
    public function getShipmentContents()
    {
        return $this->ShipmentContents;
    }
    
    /**
     * Set PackageContents
     *
     * @param string[] $packageContents
     * @return TrackDetail
     */
    public function setPackageContents(array $packageContents)
    {
        $this->PackageContents = $packageContents;
        return $this;
    }
    
    /**
     * Returns Set PackageContents
     *
     * @return string[]
     */
    public function getPackageContents()
    {
        return $this->PackageContents;
    }
    
    /**
     * Set ClearanceLocationCode
     *
     * @param string $clearanceLocationCode
     * @return TrackDetail
     */
    public function setClearanceLocationCode($clearanceLocationCode)
    {
        $this->ClearanceLocationCode = $clearanceLocationCode;
        return $this;
    }
    
    /**
     * Returns Set ClearanceLocationCode
     *
     * @return string
     */
    public function getClearanceLocationCode()
    {
        return $this->ClearanceLocationCode;
    }
    
    /**
     * Set Commodities
     *
     * @param Commodity[] $commodities
     * @return TrackDetail
     */
    public function setCommodities(array $commodities)
    {
        $this->Commodities = $commodities;
        return $this;
    }
    
    /**
     * Returns Set Commodities
     *
     * @return Commodity[]
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    
    /**
     * Set ReturnDetail
     *
     * @param TrackReturnDetail $returnDetail
     * @return TrackDetail
     */
    public function setReturnDetail(TrackReturnDetail $returnDetail)
    {
        $this->ReturnDetail = $returnDetail;
        return $this;
    }
    
    /**
     * Returns Set ReturnDetail
     *
     * @return TrackReturnDetail
     */
    public function getReturnDetail()
    {
        return $this->ReturnDetail;
    }
    
    /**
     * Specifies the reason for return.
     *
     * @param CustomsOptionDetail[] $customsOptionDetails
     * @return TrackDetail
     */
    public function setCustomsOptionDetails(array $customsOptionDetails)
    {
        $this->CustomsOptionDetails = $customsOptionDetails;
        return $this;
    }
    
    /**
     * Returns Specifies the reason for return.
     *
     * @return CustomsOptionDetail[]
     */
    public function getCustomsOptionDetails()
    {
        return $this->CustomsOptionDetails;
    }
    
    /**
     * Set AdvanceNotificationDetail
     *
     * @param TrackAdvanceNotificationDetail $advanceNotificationDetail
     * @return TrackDetail
     */
    public function setAdvanceNotificationDetail(TrackAdvanceNotificationDetail $advanceNotificationDetail)
    {
        $this->AdvanceNotificationDetail = $advanceNotificationDetail;
        return $this;
    }
    
    /**
     * Returns Set AdvanceNotificationDetail
     *
     * @return TrackAdvanceNotificationDetail
     */
    public function getAdvanceNotificationDetail()
    {
        return $this->AdvanceNotificationDetail;
    }
    
    /**
     * List of special handlings that applied to this package. (Returned for CSR SL only.)
     *
     * @param TrackSpecialHandling[] $specialHandlings
     * @return TrackDetail
     */
    public function setSpecialHandlings(array $specialHandlings)
    {
        $this->SpecialHandlings = $specialHandlings;
        return $this;
    }
    
    /**
     * Returns List of special handlings that applied to this package. (Returned for CSR SL only.)
     *
     * @return TrackSpecialHandling[]
     */
    public function getSpecialHandlings()
    {
        return $this->SpecialHandlings;
    }
    
    /**
     * (Returned for CSR SL only.)
     *
     * @param Contact $shipper
     * @return TrackDetail
     */
    public function setShipper(Contact $shipper)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    
    /**
     * Returns (Returned for CSR SL only.)
     *
     * @return Contact
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    
    /**
     * Indicates last-known possession of package (Returned for CSR SL only.)
     *
     * @param \FedEx\TrackService\SimpleType\TrackPossessionStatusType|string $possessionStatus
     * @return TrackDetail
     */
    public function setPossessionStatus($possessionStatus)
    {
        $this->PossessionStatus = $possessionStatus;
        return $this;
    }
    
    /**
     * Returns Indicates last-known possession of package (Returned for CSR SL only.)
     *
     * @return \FedEx\TrackService\SimpleType\TrackPossessionStatusType|string
     */
    public function getPossessionStatus()
    {
        return $this->PossessionStatus;
    }
    
    /**
     * The address information for the shipper.
     *
     * @param Address $shipperAddress
     * @return TrackDetail
     */
    public function setShipperAddress(Address $shipperAddress)
    {
        $this->ShipperAddress = $shipperAddress;
        return $this;
    }
    
    /**
     * Returns The address information for the shipper.
     *
     * @return Address
     */
    public function getShipperAddress()
    {
        return $this->ShipperAddress;
    }
    
    /**
     * The address of the FedEx pickup location/facility.
     *
     * @param Address $originLocationAddress
     * @return TrackDetail
     */
    public function setOriginLocationAddress(Address $originLocationAddress)
    {
        $this->OriginLocationAddress = $originLocationAddress;
        return $this;
    }
    
    /**
     * Returns The address of the FedEx pickup location/facility.
     *
     * @return Address
     */
    public function getOriginLocationAddress()
    {
        return $this->OriginLocationAddress;
    }
    
    /**
     * (Returned for CSR SL only.)
     *
     * @param string $originStationId
     * @return TrackDetail
     */
    public function setOriginStationId($originStationId)
    {
        $this->OriginStationId = $originStationId;
        return $this;
    }
    
    /**
     * Returns (Returned for CSR SL only.)
     *
     * @return string
     */
    public function getOriginStationId()
    {
        return $this->OriginStationId;
    }
    
    /**
     * Estimated package pickup time for shipments that haven't been picked up.
     *
     * @param dateTime $estimatedPickupTimestamp
     * @return TrackDetail
     */
    public function setEstimatedPickupTimestamp($estimatedPickupTimestamp)
    {
        $this->EstimatedPickupTimestamp = $estimatedPickupTimestamp;
        return $this;
    }
    
    /**
     * Returns Estimated package pickup time for shipments that haven't been picked up.
     *
     * @return dateTime
     */
    public function getEstimatedPickupTimestamp()
    {
        return $this->EstimatedPickupTimestamp;
    }
    
    /**
     * Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
     *
     * @param dateTime $shipTimestamp
     * @return TrackDetail
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    
    /**
     * Returns Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
     *
     * @return dateTime
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    
    /**
     * The distance from the origin to the destination. Returned for Custom Critical shipments.
     *
     * @param Distance $totalTransitDistance
     * @return TrackDetail
     */
    public function setTotalTransitDistance(Distance $totalTransitDistance)
    {
        $this->TotalTransitDistance = $totalTransitDistance;
        return $this;
    }
    
    /**
     * Returns The distance from the origin to the destination. Returned for Custom Critical shipments.
     *
     * @return Distance
     */
    public function getTotalTransitDistance()
    {
        return $this->TotalTransitDistance;
    }
    
    /**
     * Total distance package still has to travel. Returned for Custom Critical shipments.
     *
     * @param Distance $distanceToDestination
     * @return TrackDetail
     */
    public function setDistanceToDestination(Distance $distanceToDestination)
    {
        $this->DistanceToDestination = $distanceToDestination;
        return $this;
    }
    
    /**
     * Returns Total distance package still has to travel. Returned for Custom Critical shipments.
     *
     * @return Distance
     */
    public function getDistanceToDestination()
    {
        return $this->DistanceToDestination;
    }
    
    /**
     * Provides additional details about package delivery.
     *
     * @param TrackSpecialInstruction[] $specialInstructions
     * @return TrackDetail
     */
    public function setSpecialInstructions(array $specialInstructions)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    
    /**
     * Returns Provides additional details about package delivery.
     *
     * @return TrackSpecialInstruction[]
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    
    /**
     * (Returned for CSR SL only.)
     *
     * @param Contact $recipient
     * @return TrackDetail
     */
    public function setRecipient(Contact $recipient)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    
    /**
     * Returns (Returned for CSR SL only.)
     *
     * @return Contact
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    
    /**
     * This is the latest updated destination address.
     *
     * @param Address $lastUpdatedDestinationAddress
     * @return TrackDetail
     */
    public function setLastUpdatedDestinationAddress(Address $lastUpdatedDestinationAddress)
    {
        $this->LastUpdatedDestinationAddress = $lastUpdatedDestinationAddress;
        return $this;
    }
    
    /**
     * Returns This is the latest updated destination address.
     *
     * @return Address
     */
    public function getLastUpdatedDestinationAddress()
    {
        return $this->LastUpdatedDestinationAddress;
    }
    
    /**
     * The address this package is to be (or has been) delivered.
     *
     * @param Address $destinationAddress
     * @return TrackDetail
     */
    public function setDestinationAddress(Address $destinationAddress)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    
    /**
     * Returns The address this package is to be (or has been) delivered.
     *
     * @return Address
     */
    public function getDestinationAddress()
    {
        return $this->DestinationAddress;
    }
    
    /**
     * Set HoldAtLocationContact
     *
     * @param Contact $holdAtLocationContact
     * @return TrackDetail
     */
    public function setHoldAtLocationContact(Contact $holdAtLocationContact)
    {
        $this->HoldAtLocationContact = $holdAtLocationContact;
        return $this;
    }
    
    /**
     * Returns Set HoldAtLocationContact
     *
     * @return Contact
     */
    public function getHoldAtLocationContact()
    {
        return $this->HoldAtLocationContact;
    }
    
    /**
     * The address this package is requested to placed on hold.
     *
     * @param Address $holdAtLocationAddress
     * @return TrackDetail
     */
    public function setHoldAtLocationAddress(Address $holdAtLocationAddress)
    {
        $this->HoldAtLocationAddress = $holdAtLocationAddress;
        return $this;
    }
    
    /**
     * Returns The address this package is requested to placed on hold.
     *
     * @return Address
     */
    public function getHoldAtLocationAddress()
    {
        return $this->HoldAtLocationAddress;
    }
    
    /**
     * (Returned for CSR SL only.)
     *
     * @param string $destinationStationId
     * @return TrackDetail
     */
    public function setDestinationStationId($destinationStationId)
    {
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    
    /**
     * Returns (Returned for CSR SL only.)
     *
     * @return string
     */
    public function getDestinationStationId()
    {
        return $this->DestinationStationId;
    }
    
    /**
     * The address of the FedEx delivery location/facility.
     *
     * @param Address $destinationLocationAddress
     * @return TrackDetail
     */
    public function setDestinationLocationAddress(Address $destinationLocationAddress)
    {
        $this->DestinationLocationAddress = $destinationLocationAddress;
        return $this;
    }
    
    /**
     * Returns The address of the FedEx delivery location/facility.
     *
     * @return Address
     */
    public function getDestinationLocationAddress()
    {
        return $this->DestinationLocationAddress;
    }
    
    /**
     * Set DestinationLocationType
     *
     * @param \FedEx\TrackService\SimpleType\FedExLocationType|string $destinationLocationType
     * @return TrackDetail
     */
    public function setDestinationLocationType($destinationLocationType)
    {
        $this->DestinationLocationType = $destinationLocationType;
        return $this;
    }
    
    /**
     * Returns Set DestinationLocationType
     *
     * @return \FedEx\TrackService\SimpleType\FedExLocationType|string
     */
    public function getDestinationLocationType()
    {
        return $this->DestinationLocationType;
    }
    
    /**
     * Set DestinationLocationTimeZoneOffset
     *
     * @param string $destinationLocationTimeZoneOffset
     * @return TrackDetail
     */
    public function setDestinationLocationTimeZoneOffset($destinationLocationTimeZoneOffset)
    {
        $this->DestinationLocationTimeZoneOffset = $destinationLocationTimeZoneOffset;
        return $this;
    }
    
    /**
     * Returns Set DestinationLocationTimeZoneOffset
     *
     * @return string
     */
    public function getDestinationLocationTimeZoneOffset()
    {
        return $this->DestinationLocationTimeZoneOffset;
    }
    
    /**
     * Date and time the package should be (or should have been) delivered. (Returned for CSR SL only.)
     *
     * @param dateTime $commitmentTimestamp
     * @return TrackDetail
     */
    public function setCommitmentTimestamp($commitmentTimestamp)
    {
        $this->CommitmentTimestamp = $commitmentTimestamp;
        return $this;
    }
    
    /**
     * Returns Date and time the package should be (or should have been) delivered. (Returned for CSR SL only.)
     *
     * @return dateTime
     */
    public function getCommitmentTimestamp()
    {
        return $this->CommitmentTimestamp;
    }
    
    /**
     * Date and time the package would be delivered if the package has appointment delivery as a special service.
     *
     * @param dateTime $appointmentDeliveryTimestamp
     * @return TrackDetail
     */
    public function setAppointmentDeliveryTimestamp($appointmentDeliveryTimestamp)
    {
        $this->AppointmentDeliveryTimestamp = $appointmentDeliveryTimestamp;
        return $this;
    }
    
    /**
     * Returns Date and time the package would be delivered if the package has appointment delivery as a special service.
     *
     * @return dateTime
     */
    public function getAppointmentDeliveryTimestamp()
    {
        return $this->AppointmentDeliveryTimestamp;
    }
    
    /**
     * Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     *
     * @param dateTime $estimatedDeliveryTimestamp
     * @return TrackDetail
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp)
    {
        $this->EstimatedDeliveryTimestamp = $estimatedDeliveryTimestamp;
        return $this;
    }
    
    /**
     * Returns Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     *
     * @return dateTime
     */
    public function getEstimatedDeliveryTimestamp()
    {
        return $this->EstimatedDeliveryTimestamp;
    }
    
    /**
     * The time the package was actually delivered.
     *
     * @param dateTime $actualDeliveryTimestamp
     * @return TrackDetail
     */
    public function setActualDeliveryTimestamp($actualDeliveryTimestamp)
    {
        $this->ActualDeliveryTimestamp = $actualDeliveryTimestamp;
        return $this;
    }
    
    /**
     * Returns The time the package was actually delivered.
     *
     * @return dateTime
     */
    public function getActualDeliveryTimestamp()
    {
        return $this->ActualDeliveryTimestamp;
    }
    
    /**
     * Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     *
     * @param Address $actualDeliveryAddress
     * @return TrackDetail
     */
    public function setActualDeliveryAddress(Address $actualDeliveryAddress)
    {
        $this->ActualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    
    /**
     * Returns Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     *
     * @return Address
     */
    public function getActualDeliveryAddress()
    {
        return $this->ActualDeliveryAddress;
    }
    
    /**
     * Identifies the method of office order delivery.
     *
     * @param \FedEx\TrackService\SimpleType\OfficeOrderDeliveryMethodType|string $officeOrderDeliveryMethod
     * @return TrackDetail
     */
    public function setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod)
    {
        $this->OfficeOrderDeliveryMethod = $officeOrderDeliveryMethod;
        return $this;
    }
    
    /**
     * Returns Identifies the method of office order delivery.
     *
     * @return \FedEx\TrackService\SimpleType\OfficeOrderDeliveryMethodType|string
     */
    public function getOfficeOrderDeliveryMethod()
    {
        return $this->OfficeOrderDeliveryMethod;
    }
    
    /**
     * Strict text indicating the delivery location at the delivered to address.
     *
     * @param \FedEx\TrackService\SimpleType\TrackDeliveryLocationType|string $deliveryLocationType
     * @return TrackDetail
     */
    public function setDeliveryLocationType($deliveryLocationType)
    {
        $this->DeliveryLocationType = $deliveryLocationType;
        return $this;
    }
    
    /**
     * Returns Strict text indicating the delivery location at the delivered to address.
     *
     * @return \FedEx\TrackService\SimpleType\TrackDeliveryLocationType|string
     */
    public function getDeliveryLocationType()
    {
        return $this->DeliveryLocationType;
    }
    
    /**
     * User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     *
     * @param string $deliveryLocationDescription
     * @return TrackDetail
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription)
    {
        $this->DeliveryLocationDescription = $deliveryLocationDescription;
        return $this;
    }
    
    /**
     * Returns User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     *
     * @return string
     */
    public function getDeliveryLocationDescription()
    {
        return $this->DeliveryLocationDescription;
    }
    
    /**
     * Specifies the number of delivery attempts made to deliver the shipment.
     *
     * @param nonNegativeInteger $deliveryAttempts
     * @return TrackDetail
     */
    public function setDeliveryAttempts($deliveryAttempts)
    {
        $this->DeliveryAttempts = $deliveryAttempts;
        return $this;
    }
    
    /**
     * Returns Specifies the number of delivery attempts made to deliver the shipment.
     *
     * @return nonNegativeInteger
     */
    public function getDeliveryAttempts()
    {
        return $this->DeliveryAttempts;
    }
    
    /**
     * This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     *
     * @param string $deliverySignatureName
     * @return TrackDetail
     */
    public function setDeliverySignatureName($deliverySignatureName)
    {
        $this->DeliverySignatureName = $deliverySignatureName;
        return $this;
    }
    
    /**
     * Returns This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     *
     * @return string
     */
    public function getDeliverySignatureName()
    {
        return $this->DeliverySignatureName;
    }
    
    /**
     * Specifies the details about the count of the packages delivered at the delivery location and the count of the packages at the origin.
     *
     * @param PieceCountVerificationDetail[] $pieceCountVerificationDetails
     * @return TrackDetail
     */
    public function setPieceCountVerificationDetails(array $pieceCountVerificationDetails)
    {
        $this->PieceCountVerificationDetails = $pieceCountVerificationDetails;
        return $this;
    }
    
    /**
     * Returns Specifies the details about the count of the packages delivered at the delivery location and the count of the packages at the origin.
     *
     * @return PieceCountVerificationDetail[]
     */
    public function getPieceCountVerificationDetails()
    {
        return $this->PieceCountVerificationDetails;
    }
    
    /**
     * Specifies the total number of unique addresses on the CRNs in a consolidation.
     *
     * @param nonNegativeInteger $totalUniqueAddressCountInConsolidation
     * @return TrackDetail
     */
    public function setTotalUniqueAddressCountInConsolidation($totalUniqueAddressCountInConsolidation)
    {
        $this->TotalUniqueAddressCountInConsolidation = $totalUniqueAddressCountInConsolidation;
        return $this;
    }
    
    /**
     * Returns Specifies the total number of unique addresses on the CRNs in a consolidation.
     *
     * @return nonNegativeInteger
     */
    public function getTotalUniqueAddressCountInConsolidation()
    {
        return $this->TotalUniqueAddressCountInConsolidation;
    }
    
    /**
     * Set AvailableImages
     *
     * @param AvailableImageType[] $availableImages
     * @return TrackDetail
     */
    public function setAvailableImages(array $availableImages)
    {
        $this->AvailableImages = $availableImages;
        return $this;
    }
    
    /**
     * Returns Set AvailableImages
     *
     * @return AvailableImageType[]
     */
    public function getAvailableImages()
    {
        return $this->AvailableImages;
    }
    
    /**
     * Set Signature
     *
     * @param SignatureImageDetail $signature
     * @return TrackDetail
     */
    public function setSignature(SignatureImageDetail $signature)
    {
        $this->Signature = $signature;
        return $this;
    }
    
    /**
     * Returns Set Signature
     *
     * @return SignatureImageDetail
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    
    /**
     * The types of email notifications that are available for the package.
     *
     * @param EMailNotificationEventType[] $notificationEventsAvailable
     * @return TrackDetail
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable)
    {
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    
    /**
     * Returns The types of email notifications that are available for the package.
     *
     * @return EMailNotificationEventType[]
     */
    public function getNotificationEventsAvailable()
    {
        return $this->NotificationEventsAvailable;
    }
    
    /**
     * Returned for cargo shipments only when they are currently split across vehicles.
     *
     * @param TrackSplitShipmentPart[] $splitShipmentParts
     * @return TrackDetail
     */
    public function setSplitShipmentParts(array $splitShipmentParts)
    {
        $this->SplitShipmentParts = $splitShipmentParts;
        return $this;
    }
    
    /**
     * Returns Returned for cargo shipments only when they are currently split across vehicles.
     *
     * @return TrackSplitShipmentPart[]
     */
    public function getSplitShipmentParts()
    {
        return $this->SplitShipmentParts;
    }
    
    /**
     * Specifies the details about the eligibility for different delivery options.
     *
     * @param DeliveryOptionEligibilityDetail[] $deliveryOptionEligibilityDetails
     * @return TrackDetail
     */
    public function setDeliveryOptionEligibilityDetails(array $deliveryOptionEligibilityDetails)
    {
        $this->DeliveryOptionEligibilityDetails = $deliveryOptionEligibilityDetails;
        return $this;
    }
    
    /**
     * Returns Specifies the details about the eligibility for different delivery options.
     *
     * @return DeliveryOptionEligibilityDetail[]
     */
    public function getDeliveryOptionEligibilityDetails()
    {
        return $this->DeliveryOptionEligibilityDetails;
    }
    
    /**
     * Event information for a tracking number.
     *
     * @param TrackEvent[] $events
     * @return TrackDetail
     */
    public function setEvents(array $events)
    {
        $this->Events = $events;
        return $this;
    }
    
    /**
     * Returns Event information for a tracking number.
     *
     * @return TrackEvent[]
     */
    public function getEvents()
    {
        return $this->Events;
    }
    

    
}