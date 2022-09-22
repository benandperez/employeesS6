<?php

namespace App\Entity;

use App\Repository\EmployeesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeesRepository::class)]
class Employees
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $firstName = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $secondName = null;

    #[ORM\Column(length: 50)]
    private ?string $lastName = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $motherLastName = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $marriedLastName = null;

    #[ORM\Column(length: 50)]
    private ?string $document = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $expirationDate = null;

    #[ORM\Column(length: 50)]
    private ?string $birthPlace = null;

    #[ORM\Column(length: 50)]
    private ?string $nationality = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $birthDay = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(length: 100)]
    private ?string $fullResidenceAddress = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $personalEmail = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $residentialTelephone = null;

    #[ORM\Column(length: 15)]
    private ?string $cellPhone = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $expirationDateLicense = null;

    #[ORM\Column]
    private ?bool $hasOwnCar = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $inCaseOfEmergency = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $familyPhoneNumber = null;

    #[ORM\Column]
    private ?bool $allergic = null;

    #[ORM\Column]
    private ?bool $chronicDisease = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $allergicYes = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $chronicDiseaseYes = null;

    #[ORM\Column]
    private ?bool $bloodDonor = null;

    #[ORM\Column]
    private ?bool $bankAccount = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $accountNumber = null;

    #[ORM\Column]
    private ?bool $sportsPractice = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $whatSports = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $favoriteHobby = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?DocumentType $documentType = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?Gender $gender = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?MaritalStatus $maritalStatus = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?Province $province = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?Corregimiento $corregimiento = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?District $district = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?LicenseType $licenseType = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?BloodType $bloodType = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    private ?Bank $bank = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): string
    {
        return $this->getFirstName() . " " . $this->getSecondName(). " " . $this->getLastName();
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    public function setSecondName(?string $secondName): self
    {
        $this->secondName = $secondName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getMotherLastName(): ?string
    {
        return $this->motherLastName;
    }

    public function setMotherLastName(?string $motherLastName): self
    {
        $this->motherLastName = $motherLastName;

        return $this;
    }

    public function getMarriedLastName(): ?string
    {
        return $this->marriedLastName;
    }

    public function setMarriedLastName(?string $marriedLastName): self
    {
        $this->marriedLastName = $marriedLastName;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(string $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(\DateTimeInterface $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getBirthDay(): ?\DateTimeInterface
    {
        return $this->birthDay;
    }

    public function setBirthDay(\DateTimeInterface $birthDay): self
    {
        $this->birthDay = $birthDay;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getFullResidenceAddress(): ?string
    {
        return $this->fullResidenceAddress;
    }

    public function setFullResidenceAddress(string $fullResidenceAddress): self
    {
        $this->fullResidenceAddress = $fullResidenceAddress;

        return $this;
    }

    public function getPersonalEmail(): ?string
    {
        return $this->personalEmail;
    }

    public function setPersonalEmail(?string $personalEmail): self
    {
        $this->personalEmail = $personalEmail;

        return $this;
    }

    public function getResidentialTelephone(): ?string
    {
        return $this->residentialTelephone;
    }

    public function setResidentialTelephone(?string $residentialTelephone): self
    {
        $this->residentialTelephone = $residentialTelephone;

        return $this;
    }

    public function getCellPhone(): ?string
    {
        return $this->cellPhone;
    }

    public function setCellPhone(string $cellPhone): self
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    public function getExpirationDateLicense(): ?\DateTimeInterface
    {
        return $this->expirationDateLicense;
    }

    public function setExpirationDateLicense(?\DateTimeInterface $expirationDateLicense): self
    {
        $this->expirationDateLicense = $expirationDateLicense;

        return $this;
    }

    public function isHasOwnCar(): ?bool
    {
        return $this->hasOwnCar;
    }

    public function setHasOwnCar(bool $hasOwnCar): self
    {
        $this->hasOwnCar = $hasOwnCar;

        return $this;
    }

    public function getInCaseOfEmergency(): ?string
    {
        return $this->inCaseOfEmergency;
    }

    public function setInCaseOfEmergency(?string $inCaseOfEmergency): self
    {
        $this->inCaseOfEmergency = $inCaseOfEmergency;

        return $this;
    }

    public function getFamilyPhoneNumber(): ?string
    {
        return $this->familyPhoneNumber;
    }

    public function setFamilyPhoneNumber(?string $familyPhoneNumber): self
    {
        $this->familyPhoneNumber = $familyPhoneNumber;

        return $this;
    }

    public function isAllergic(): ?bool
    {
        return $this->allergic;
    }

    public function setAllergic(bool $allergic): self
    {
        $this->allergic = $allergic;

        return $this;
    }

    public function isChronicDisease(): ?bool
    {
        return $this->chronicDisease;
    }

    public function setChronicDisease(bool $chronicDisease): self
    {
        $this->chronicDisease = $chronicDisease;

        return $this;
    }

    public function getAllergicYes(): ?string
    {
        return $this->allergicYes;
    }

    public function setAllergicYes(?string $allergicYes): self
    {
        $this->allergicYes = $allergicYes;

        return $this;
    }

    public function getChronicDiseaseYes(): ?string
    {
        return $this->chronicDiseaseYes;
    }

    public function setChronicDiseaseYes(?string $chronicDiseaseYes): self
    {
        $this->chronicDiseaseYes = $chronicDiseaseYes;

        return $this;
    }

    public function isBloodDonor(): ?bool
    {
        return $this->bloodDonor;
    }

    public function setBloodDonor(bool $bloodDonor): self
    {
        $this->bloodDonor = $bloodDonor;

        return $this;
    }

    public function isBankAccount(): ?bool
    {
        return $this->bankAccount;
    }

    public function setBankAccount(bool $bankAccount): self
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function isSportsPractice(): ?bool
    {
        return $this->sportsPractice;
    }

    public function setSportsPractice(bool $sportsPractice): self
    {
        $this->sportsPractice = $sportsPractice;

        return $this;
    }

    public function getWhatSports(): ?string
    {
        return $this->whatSports;
    }

    public function setWhatSports(?string $whatSports): self
    {
        $this->whatSports = $whatSports;

        return $this;
    }

    public function getFavoriteHobby(): ?string
    {
        return $this->favoriteHobby;
    }

    public function setFavoriteHobby(?string $favoriteHobby): self
    {
        $this->favoriteHobby = $favoriteHobby;

        return $this;
    }

    public function getDocumentType(): ?DocumentType
    {
        return $this->documentType;
    }

    public function setDocumentType(?DocumentType $documentType): self
    {
        $this->documentType = $documentType;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(?Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getMaritalStatus(): ?MaritalStatus
    {
        return $this->maritalStatus;
    }

    public function setMaritalStatus(?MaritalStatus $maritalStatus): self
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    public function getProvince(): ?Province
    {
        return $this->province;
    }

    public function setProvince(?Province $province): self
    {
        $this->province = $province;

        return $this;
    }

    public function getCorregimiento(): ?Corregimiento
    {
        return $this->corregimiento;
    }

    public function setCorregimiento(?Corregimiento $corregimiento): self
    {
        $this->corregimiento = $corregimiento;

        return $this;
    }

    public function getDistrict(): ?District
    {
        return $this->district;
    }

    public function setDistrict(?District $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getLicenseType(): ?LicenseType
    {
        return $this->licenseType;
    }

    public function setLicenseType(?LicenseType $licenseType): self
    {
        $this->licenseType = $licenseType;

        return $this;
    }

    public function getBloodType(): ?BloodType
    {
        return $this->bloodType;
    }

    public function setBloodType(?BloodType $bloodType): self
    {
        $this->bloodType = $bloodType;

        return $this;
    }

    public function getBank(): ?Bank
    {
        return $this->bank;
    }

    public function setBank(?Bank $bank): self
    {
        $this->bank = $bank;

        return $this;
    }
}
