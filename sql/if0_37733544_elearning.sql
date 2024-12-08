-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql311.infinityfree.com
-- Generation Time: Nov 30, 2024 at 08:23 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37733544_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$qCcg2MCwOgPbFk/G41wyT.oTH1AzKcejcdUE0CD1KyCalfb7Hl4ai');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `subtopic` varchar(128) NOT NULL,
  `content` mediumtext NOT NULL,
  `media` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `topic`, `description`, `subtopic`, `content`, `media`) VALUES
(1, ' Understanding Cybersecurity', 'Cyber security refers to the practices of protecting your networks, digital devices, systems, and all of the data they hold against online attacks. By knowing about cyberattacks and cybersecurity, we ', 'What is Cybersecurity', 'For example, you can only view your personal information thanks to encryption, which helps to keep it secret. You can learn to recognize scams like phishing, in which criminals attempt to obtain your personal information by posing as someone you can trust,', 'media/0cf4121147b8d7cdf883d5ca6f1f3447photo1.png'),
(3, ' Understanding Cybersecurity', 'This section introduces the concept of cybersecurity, highlighting its importance in the modern digital landscape.', 'Introduction to Cybersecurity', 'Cybersecurity refers to the practice of protecting systems, networks, and data from digital attacks, theft, and damage. In todayâ€™s interconnected world, safeguarding sensitive information and ensuring system integrity is crucial for individuals, businesses, and governments alike.&#13;&#10;&#13;&#10;Key points:&#13;&#10;&#13;&#10;What is Cybersecurity?&#13;&#10;Cybersecurity encompasses measures to protect computer systems, networks, and data against cyber threats, including viruses, ransomware, and phishing attacks.&#13;&#10;&#13;&#10;Why is it Important?&#13;&#10;&#13;&#10;Protects personal and sensitive data from theft.&#13;&#10;Ensures the uninterrupted operation of businesses and services.&#13;&#10;Defends against economic losses and reputational damage.&#13;&#10;Types of Cybersecurity Threats:&#13;&#10;&#13;&#10;Malware: Malicious software such as viruses or worms.&#13;&#10;Phishing: Deceptive attempts to acquire sensitive information.&#13;&#10;Ransomware: Attacks that lock systems until a ransom is paid.&#13;&#10;Preventative Measures:&#13;&#10;&#13;&#10;Use strong, unique passwords.&#13;&#10;Enable multi-factor authentication.&#13;&#10;Keep software and systems updated.&#13;&#10;Be cautious of suspicious emails and links.&#13;&#10;Cybersecurity is not only about technology but also about educating people to adopt safe practices online. By understanding the fundamentals, individuals and organizations can significantly reduce the risk of cyberattacks.', 'media/e0b33d0e5bcf1df21a4fa929a7af48d8DALLÂ·E 2024-11-28 23.22.56 - A visually engaging digital artwork illustrating cybersecurity, showing a glowing shield icon in front of a futuristic digital network. The shield rep.webp'),
(4, 'Phishing Scams 101', 'Similar to that of catching fishes but deceives and takes your information. While convincing, they have bad intentions to be met. They wait for an opportunity and patiently wait for any move.', 'What is Phishing?', 'Phishing is a deceptive tactic employed by cybercriminals to trick individuals into revealing sensitive personal information. This can involve sending fraudulent emails, text messages, or phone calls that appear to be from legitimate sources. The goal is to lure victims into clicking malicious links or downloading harmful attachments, ultimately compromising their devices and data.&#13;&#10;&#13;&#10;Phishing attacks often rely on social engineering techniques, manipulating people&#39;s emotions or exploiting their curiosity. Some common methods include email phishing, where fraudulent emails mimic legitimate organizations; smishing, which uses SMS messages to deliver phishing attacks; vishing, which employs voice calls to deceive victims; pharming, which redirects users to malicious websites through DNS poisoning; and spear phishing, which targets specific individuals or organizations with highly personalized phishing attacks.&#13;&#10;&#13;&#10;A notable case of phishing would be the one between 2013 and 2015, where a 50-year-old scammer named Evaldas Rimasaukas successfully defrauded tech giants like Facebook and Google of over $100 million. He achieved this by setting up a fake company and sending convincing phishing emails to unsuspecting employees. This incident highlights the potential severity of phishing attacks and the importance of cybersecurity awareness.', 'media/00db58872676a09b14485965be3ef38aPhishing Attacks and Scams.png'),
(5, 'Phishing Scams 101', 'Phishing attacks are commonly executed through emails, websites, spear phishing, and voice phishing. Attackers often use urgent or threatening language to pressure their victims into compliance.', 'Common Phishing Tactics', 'Phishing attackers often use urgent or threatening language to pressure their victims into compliance. These deceptive tactics are designed to obtain sensitive information from their victims by creating a sense of urgency or threat. For instance, attackers might send emails containing suspicious links that lead to fake questionnaires intended to extract sensitive information. These phishing links can take various forms, such as fake invoices, links to make payments, scam offers claiming eligibility for government refunds, coupons for free items, requests to click on attachments, requests to enable macros in Word documents, and requests to update passwords. Phishing attacks pose a significant threat to online security by exploiting human trust and psychology to steal confidential information. By recognizing and understanding the common tactics used by phishers, such as urgent language and suspicious links, individuals can better protect themselves. It is crucial to remain cautious about what is being asked and to stay informed about deceptive techniques used in phishing scams.', 'media/eb2103b2672e8ac44b62a73080a7cd4aPhishing Tactics.jpg'),
(6, 'Phishing Scams 101', 'Although threat actors will do anything to convince you to hand over your personal information, it is important to remain calm and carefully evaluate each detail of their tricks.', 'Recognizing Phishing Attempts', 'Phishing attempts often involve various tactics to deceive you. Attackers might claim they have noticed suspicious activity or login attempts, report issues with your account or payment information (even when there isn&#39;t any), or request confirmation of personal or financial information. They might also claim you have won a contest, offer a free product, or state that you are eligible for a government refund. &#13;&#10;&#13;&#10;In order to determine whether these claims are real or fake, check every detail carefully. Phishing emails often start with a generic greeting, contain incorrect information about certain account billings, and invite you to click a link to update payment details. Real companies will communicate with you without asking for personal or financial information, as they already have the necessary details and wouldn&#39;t need to request them.', 'media/86bc839fe6c84dc59a7875deb741679cphishing-attacks-1.jpg'),
(7, 'Phishing Scams 101', 'Protecting yourself from phishing involves careful attention to detail and avoiding the sharing of personal information through untrusted media. Two-factor authentication (2FA) and antivirus programs ', 'Protecting Yourself from Phishing', 'While scrutinizing every detail in emails, calls, and websites, it is essential to never share personal information via these media without further assurance. The use of two-factor authentication (2FA) is a crucial measure to prevent phishing. If a threat actor sends a suspicious email attempting to trick you into logging in with your Google or Facebook account, the 2FA system would trigger and protect you. Only legitimate sites will send you a working 2FA. If the system does not activate, it means you are being tricked.&#13;&#10;&#13;&#10;Some phishing scams conducted through emails alone link to suspicious-looking websites. It is important not to click these links. If you do, ensure you have a reliable antivirus program and keep your software up to date.Report any apparent phishing scams to the appropriate authorities.', 'media/0786abb2796ca996c47f9c8128702c2cProtect yourself from phishing.png'),
(8, ' Understanding Cybersecurity', 'This section tackles various types of cybersecurity, their focus and purpose.', 'Different Types of Cybersecurity', 'Cybersecurity encompasses various types, each focusing on different aspects of protecting information, devices, and networks from threats. These types include network security, application security, information/data security, cloud security, mobile security, endpoint security, critical infrastructure security, and Internet of Things (IoT) security. The following are the different types of cybersecurity:&#13;&#10;&#13;&#10;Network Security focuses on preventing data breaches, illegal access, and other network-based risks from entering computer networks. It involves technologies such as firewalls and virtual private networks (VPNs). For instance, using free Wi-Fi in public areas can expose your data as these hotspots are often unencrypted and lack necessary security measures, increasing the chances of data theft.&#13;&#10;&#13;&#10;Application Security is concerned with protecting software programs and avoiding vulnerabilities that hackers might exploit. This involves regular software patches and upgrades, application-level firewalls, and secure coding techniques. Although mobile applications from reputable sources like Google Play Store, Apple App Store, and Amazon App Store are generally secure, some applications can be deceptive, stealing personal data and sharing it with third parties. Therefore, it is crucial to download software from reliable sources rather than third-party websites.&#13;&#10;&#13;&#10;Information/Data Security focuses on preventing unwanted access, disclosure, modification, or destruction of sensitive data. This includes encryption, access controls, and data classification. Promoting security awareness among users, responding to common security risks, and identifying potential threats such as phishing attacks are key aspects of information security.&#13;&#10;&#13;&#10;Cloud Security entails protecting cloud-hosted data, apps, and infrastructure by ensuring appropriate access controls, data security, and compliance. It utilizes various cloud service providers like AWS, Azure, and Google Cloud to safeguard against threats. Cloud-based storage enhances privacy and allows access to data from any device with proper authentication.&#13;&#10;&#13;&#10;Mobile Security involves protecting personal and organizational information stored on mobile devices from malicious attacks, including malware, unauthorized access, and device loss or theft.&#13;&#10;&#13;&#10;Endpoint Security refers to protecting individual devices such as laptops, PCs, smartphones, and Internet of Things (IoT) devices. It includes device encryption, intrusion prevention systems (IPS), antivirus software, and regular software updates.&#13;&#10;&#13;&#10;Critical Infrastructure Security involves protecting systems, networks, and resources essential for the economy and security of a society, such as transportation networks and the food and agriculture sectors.&#13;&#10;&#13;&#10;Internet of Things (IoT) Security addresses issues like easy-to-crack passwords for IoT devices, which are often left unchanged by suppliers and users. These devices, if left open to remote access, become targets for attackers using automated scripts for exploitation.', 'media/428dbd95dbff0c0931d2fde71e0d064eVarious Types of Cybersecurity.jpg'),
(9, ' Understanding Cybersecurity', 'This section covers the importance of cybersecurity and its impact in current everyday lives.', 'Importance of Cybersecurity and Recent Cybersecurity Trends', 'Our digital assets, such as intellectual property, vital infrastructure, and private and financial data, must be protected by cybersecurity. Cyberattacks can lead to financial loss, harm to one&#39;s reputation, and even bodily injury. Cybersecurity is critically important for companies of all sizes, especially as wireless communication networks and the growing use of technology in industries like government, education, and healthcare digitize more information.&#13;&#10;&#13;&#10;The purpose of cybersecurity is to protect the data of firms, such as Yahoo, Google, and others, which contain very sensitive information that could harm us and our reputations if compromised. Attackers target both large and small businesses, stealing important documents and data in the process.&#13;&#10;&#13;&#10;As of 2024, several noteworthy trends have emerged in the field of cybersecurity. The rise of AI and machine learning stands out, with more cybersecurity products leveraging these technologies to quickly identify and address threats, often more efficiently than humans can. This advancement is crucial in safeguarding sensitive data by recognizing patterns and predicting potential threats. Additionally, ransomware attacks are increasingly prevalent, posing a significant threat by locking access to data until a ransom is paid. To avoid falling victim to such attacks, it is essential for individuals and businesses to invest in robust security measures and perform regular data backups.&#13;&#10;&#13;&#10;Cloud security has also become a paramount concern as more companies transition their operations to the cloud. Ensuring robust authentication techniques and maintaining up-to-date security standards are vital to prevent breaches. Meanwhile, the vulnerabilities of IoT devices, such as wearable technology and smart home appliances, has heightened the risk of cyberattacks. It is critical to ensure these devices are equipped with the latest security features.&#13;&#10;&#13;&#10;Furthermore, the concept of Zero Trust Security, which involves continuous verification and monitoring of all access requests, is gaining traction to enhance overall security. The growing demand for qualified cybersecurity professionals highlights a significant skills gap, underscoring the need for experts capable of defending against increasingly sophisticated cyber threats. Finally, with the implementation of new regulations worldwide to protect personal information, businesses must stay informed and compliant to avoid substantial fines and ensure the security of their data.', 'media/372a4f65aeddea6ce70f37a5051cd25ccyber-security-ai.jpg'),
(10, 'Safe Internet Browsing', 'Introducing the relevance of safe Internet browsing ', 'Cybersafety', 'Cybersafety is defined as using the Internet in a responsible and safe manner to ensure that personal information is secure and private and does not endanger the information of others. It is essentially an appropriate collection of guidelines that encourage safe and secure internet use while excluding online risks. These days, one of the biggest worries is how to use the Internet safely because everything we do online, including the websites we visit, leaves a data trail that websites exploit to follow us.', 'media/df3b07b930e5ad2d423e1a36076cca02Cyber Safety.jpg'),
(11, 'Safe Internet Browsing', 'This section explains about website tracking as users use their devices, such as how their information is being collected and they can be potentially tracked by attackers.', 'Website Tracking', 'Web tracking, often known as website tracking, is the process by which website administrators and other parties gather and save user data from their website visitors. They are also able to share user activity with other people. To learn more about a user&#39;s interests without compromising their privacy, it is crucial to monitor their activity. Laws pertaining to data privacy make sure that user tracking doesn&#39;t result in any privacy violations. A website often monitors user interests to determine the type of goods that consumers like, which aids in advertising efforts. The fact that certain websites function improperly without monitoring is another facet of website tracking. Therefore, tracking is necessary for a website to function properly. Website tracking is acceptable as long as data privacy regulations are followed; it is against the law to collect users&#39; private and sensitive information without their consent.&#13;&#10;&#13;&#10;Forms like feedback forms and other forms are used by websites to gather information from users. Certain websites gather a range of information, while others don&#39;t gather any data at all. It all hinges on how well the website and its services are monetized. One type of website tracking tool is Google Analytics, which gathers a variety of data about users, including their gender, location, name, age, and browser history, as well as how they interact with the website, including what products they click on, their purchasing patterns, where they go afterward, and more. In addition to users&#39; personal data, websites gather IP addresses to determine users&#39; location, browser information, and the device they are using to access the website.&#13;&#10;&#13;&#10;To gather information about individuals and their online activities, user tracking is crucial. Internet users can be tracked using a variety of methods. Additionally, websites gather information to tailor ads to individual users. The common ways a user can be tracked are through a deviceâ€™s IP address, a websiteâ€™s HTTP header that a user visits, cookies, and third-party websites.&#13;&#10;&#13;&#10;An IP address is a user device&#39;s unique address. A website can determine the user&#39;s geographic location based on this IP address. Although an IP address may vary over time, it can still be utilized to identify a person when combined with other tracking techniques. It is the simplest method of tracking an internet user.&#13;&#10;&#13;&#10;Cookies are little bits of data that a website may save in the browser of the user. These cookies are used by websites to monitor users. Generally speaking, websites keep cookies to remember specific user preferences. Cookies are therefore ways to follow people from one website to another. The duration of user tracking depends on the kind of cookie. Session cookies are only kept on the user&#39;s computer while they are using the browser; they are deleted when the user exits the session.&#13;&#10;&#13;&#10;Your web browser loads the page whenever you visit a website, and it uses the HTTP header to inform the website about you. You are now on a webpage that receives user information from the referrer header. In the options, you may disable it. Information about users is also sent by the HTTP header once the content has loaded.&#13;&#10;&#13;&#10;Additionally, online browsers can provide third-party websites access to search histories, which they can use to follow specific users. The operating system, font size and type, screen resolution, time zone, and many other details are really provided by the browsers. Browsers must thus be set up correctly to eliminate needless information leaks.&#13;&#10;', 'media/15a18937891a4dd6ed52ac2fc52d61d1cookies.jpg'),
(12, 'Safe Internet Browsing', 'This section provides solutions in order for users be able to safely browse the Internet.', 'How to Safely browse the Internet', 'As user information can potentially be tracked as websites collect certain amount of information about users, there are some ways to guarantee your safety as you visit websites. &#13;&#10;&#13;&#10;Anonymous browsing allows users to access websites without disclosing private information such as IP addresses or locations. By using Incognito mode, users can surf anonymously without their behavior being recorded. This feature is particularly helpful when entering sensitive information like bank account details. To activate incognito mode, press Ctrl + Shift + N.&#13;&#10;&#13;&#10;A firewall is essential for preventing unauthorized access to your network. It monitors both incoming and outgoing traffic, capturing any illegal activity. Most operating systems come with a built-in firewall, which should always be enabled to maintain security.&#13;&#10;&#13;&#10;Managing your browser settings to prevent tracking is crucial, as websites can monitor IP addresses and other user data. Search engines often compile users&#39; queries. Adjusting the browserâ€™s default settings to exclude cookies can help protect your privacy.&#13;&#10;&#13;&#10;Before submitting sensitive information on a website, such as credit card numbers, it is important to verify the site&#39;s security. Ensure the address bar begins with HTTPS and displays a lock icon.&#13;&#10;&#13;&#10;When using public Wi-Fi, such as in airports and train stations, avoid accessing private emails or entering critical information. Most free networks lack encryption, making them vulnerable to hacking and fraudulent activities.&#13;&#10;&#13;&#10;Various plugins available online can help prevent data theft. For instance, ad-blockers are effective in stopping intrusive pop-ups and ads that may trick users into divulging private information.&#13;&#10;&#13;&#10;Employing a Virtual Private Network (VPN) can further protect your privacy by encrypting data and internet requests before they are sent. The data is first sent to a VPN server where it is decrypted and then sent to its destination, keeping you untrackable by websites, advertisers, and internet service providers.&#13;&#10;&#13;&#10;Using antivirus software is another essential measure to safeguard your computer from viruses, worms, and other threats. Keeping your antivirus software updated is vital for continued protection.&#13;&#10;&#13;&#10;Regularly clearing your browserâ€™s cache and cookies helps maintain privacy and security.&#13;&#10;&#13;&#10;A secure password manager is also crucial, as it allows you to use unique passwords for different websites without the need to remember each one. This prevents hackers from easily accessing your accounts if one password is compromised.', 'media/0622a2c83a889622f3961443573ddec0Safe browsing.jpg'),
(13, 'Protecting Personal Information', 'This section covers the overview of the importance and impact of passwords.', 'Password Security: Overview', 'I only need the content this time&#13;&#10;Passwords play a crucial role in securing access to devices and online accounts by verifying the user&#39;s identity. They come in various types, including passphrases, which use multiple words, and passkeys or PINs, which are usually numeric and often used in simpler security systems.&#13;&#10;&#13;&#10;Weak passwords pose significant security risks, potentially leading to breaches of personal and confidential information. Common weaknesses include simple passwords like &#34;password,&#34; sequential numbers like &#34;12345678,&#34; and easily accessible information such as birth dates or pet names. On the other hand, strong passwords have characteristics that go beyond minimum length requirements. They are at least 12 characters long (preferably 14 or more) and include a mix of uppercase and lowercase letters, numbers, and symbols. Strong passwords are not based on familiar names or easily guessable information, are unique for each account, and are different from previous passwords when changed. Examples of strong passwords include &#34;P@55w0rd,&#34; &#34;5cr@mb13,&#34; and &#34;th15isMyp455w0rd.&#34;&#13;&#10;&#13;&#10;Cybersecurity experts recommend changing passwords every 2-3 months, especially after security breaches or suspicions of malware. Alternatives to traditional passwords, such as two-factor authentication (2FA), multi-factor authentication (MFA), biometrics, tokens, one-time passwords (OTP), and social login, offer enhanced security. 2FA combines two forms of verification, such as a password and a fingerprint, while MFA uses multiple verification methods beyond just two. Biometrics utilize physical characteristics like fingerprints or facial recognition, and tokens are hardware devices like smart cards for secure access. OTPs are automatically generated passwords for single-use transactions, and social login allows users to authenticate using existing accounts from platforms like Facebook or Google.', 'media/50d6bd6f6403371129e454f01f3fe4deOIP.jpg'),
(14, 'Protecting Personal Information', 'This section discusses the importance of recognizing of strong or weak passwords.', 'Etiquette in Passwords: Effects of Strong or Weak Passwords', 'Weak passwords pose significant security risks that can lead to breaches of personal and confidential information. For both users and businesses, strong security measures are essential to eliminate password vulnerabilities. Common weaknesses include using simple passwords like &#34;password,&#34; sequential numbers such as &#34;12345678,&#34; and easily accessible information like birthdates, pet names, relatives&#39; names, and addresses. Reusing the same password across multiple accounts further weakens security and increases the risk of breaches.&#13;&#10;&#13;&#10;Strong passwords should not just meet the usual minimum character requirement but go beyond by incorporating a mix of characters, numbers, and special characters. A strong password should be at least 12 characters long, with 14 or more being preferable. It should include a combination of uppercase and lowercase letters, numbers, and symbols. Additionally, strong passwords should not be based on familiar names or easily guessable information, must be unique for each account, and should differ from previous passwords when changed. Examples of strong passwords include &#34;P@55w0rd,&#34; &#34;5cr@mb13,&#34; and &#34;th15isMyp455w0rd,&#34; as these follow the set characteristics of a strong password.&#13;&#10;&#13;&#10;Cybersecurity experts recommend changing passwords every 2-3 months, especially after a security breach, any suspicion of malware or phishing on your devices, or receiving notifications of unauthorized access attempts.', 'media/7b394c1817f9bee3cc063f62999f7ee2download.jpg'),
(15, 'Protecting Personal Information', 'While a password is traditionally a string of characters, passwordless authentication methods are becoming increasingly popular. These methods allow users and businesses to secure their accounts witho', 'Password Alternatives', 'Password alternatives provide various methods for securing accounts without using traditional character-based passwords. These methods include:&#13;&#10;&#13;&#10;Two-Factor Authentication (2FA) combines two forms of verification to authenticate the user. This could involve a string of characters, PIN, ID card, security token, fingerprint, or eye scan. By using two different factors, 2FA significantly enhances security.&#13;&#10;&#13;&#10;Multi-Factor Authentication (MFA) is similar to 2FA but involves more than two verification methods. It provides an extra layer of security by requiring multiple forms of authentication beyond just two factors.&#13;&#10;&#13;&#10;Biometrics utilize physical characteristics, such as facial features or fingerprints, or behavioral traits like typing patterns and voice recognition to authenticate the user. This method is highly secure as it relies on unique personal attributes.&#13;&#10;&#13;&#10;Tokens are physical hardware devices, such as smart cards, that users carry to gain authorized access to a network. These tokens generate or store secure codes needed for access, adding a robust layer of security.&#13;&#10;&#13;&#10;One-Time Passwords (OTP) are automatically generated passwords that authenticate the user for a single transaction. These passwords change with each use, providing strong protection against unauthorized access.&#13;&#10;&#13;&#10;Social Login allows users to authenticate on applications or websites using an existing account on platforms like Facebook or Google. This method simplifies the login process and enhances security by leveraging trusted accounts.', 'media/847bd37296e1c2ea116e238ccd1853eeOIP (2).jpg'),
(16, 'Mobile Device Security', 'This section provides an overview of what is mobile device security.', 'What is Mobile Device Security?', 'Mobile security, often known as mobile device security, is the defense of laptops, tablets, and smartphones against wireless computing risks. Its significance in mobile computing has grown. It is especially concerning because personal and corporate data is being kept on cell phones. As mobile security protects private data on these devices and guards against abuse or illegal access, keeping device software updated, installing antivirus software, creating strong passwords or biometric locks, and exercising caution while downloading applications or using the internet are all examples of mobile security measures. Mobile security, to put it simply, is cybersecurity for mobile devices. It entails safeguarding computers, tablets, and smartphones against online dangers including account breach, credential theft, and data loss.&#13;&#10;&#13;&#10;Mobile gadgets have become a necessary component of daily life. These days, people use them for more than simply entertainment, social networking, and messaging. Applications for professional and commercial networking have made mobile devices portable computers that can be utilized anywhere. Mobile devices must thus be protected to prevent them from being used as a way to jeopardize personal data. Users frequently face dangers to the security of their mobile devices, such as fraudulent websites and programs, data breaches, malware, social engineering, and more.&#13;&#10;', 'media/497a1a6ada8ce319a82ddea5c23e87b9Mobile-device-security.jpg'),
(17, 'Mobile Device Security', 'This section covers the different elements within mobile security.', 'Components of Mobile Security', 'Effective mobile security policies incorporate various elements that protect a company&#39;s systems or networks from different types of attacks. Some assaults aim to impair communications or exploit vulnerabilities in mobile devices, while others target network entry. The following security elements collectively reduce the risk of attacks on mobile devices:&#13;&#10;&#13;&#10;A Virtual Private Network (VPN) should always be used by users connecting to a network remotely. VPN services encrypt data between devices or between a device and an internal network, safeguarding data and activities against unauthorized access. Any mobile device connecting remotely to an organization&#39;s network should use a VPN to ensure its security.&#13;&#10;&#13;&#10;Endpoint protection involves using technology, best practices, and additional safeguards to defend mobile devicesâ€”such as laptops, smartphones, and tabletsâ€”from online threats and assaults. Businesses can deploy endpoint security software to protect their employees&#39; devices from being compromised when connected to the network or the cloud.&#13;&#10;&#13;&#10;Secure Web Gateways (SWGs) automatically enforce enterprise security rules and filter traffic to shield mobile devices from Internet risks. SWGs, positioned as a gate or filter between the user and the Internet, can be implemented on-site or in the cloud. They include essential components such as application control, data loss protection, antivirus software, Hypertext Transfer Protocol Secure (HTTPS) inspection, and Uniform Resource Locator (URL) filtering.&#13;&#10;&#13;&#10;Email safety is ensured by using filters to block suspicious communications containing unverifiable attachments and URLs. Phishing poses a significant cybersecurity risk to businesses, with phishing messages often containing dangerous links or files aimed at mobile users. Mobile email services, while enabling staff to stay connected on the move, must be safeguarded against such threats.', 'media/ca0351b35afa05a084d6c710bc1f808bSecure-Phone.jpg'),
(18, 'Mobile Device Security', 'This section covers the advantages mobile security provides.', 'Benefits of Mobile Security', 'Effective mobile security provides peace of mind, acting as a personal bodyguard for your phone. It ensures that your personal information, images, and private conversations remain safe from prying eyes, thanks to strong encryption. Encryption is the superhero in this scenario, transforming private information into unintelligible code that can only be deciphered with the appropriate key, such as a password or PIN.&#13;&#10;&#13;&#10;With effective mobile security, your phone becomes a digital stronghold that keeps intruders at bay. It stops hackers in their tracks, reducing the risk of them accessing your device and causing havoc, whether they are attempting to install malicious software or steal your credentials. Mobile security acts like a vigilant watchdog that alerts you at the first sign of danger.&#13;&#10;&#13;&#10;When it comes to online banking or shopping, mobile security acts as an invisible, safe bubble. This means you can access your bank account or enter your credit card information without worrying about identity theft. It&#39;s like having a security guard on your shoulder, ensuring no one eavesdrops on your private transactions.&#13;&#10;&#13;&#10;In the unfortunate event that you lose your phone, mobile security features like remote wipe offer a lifeline. While replacing your device might be a hassle, mobile security ensures that none of your data is compromised. With just a few clicks, you can remotely erase your valuable personal information, leaving nothing behind.&#13;&#10;&#13;&#10;Investing in mobile security helps you secure your digital life as well as your device. It protects you from the craziness of the online world and allows you to appreciate the benefits of contemporary technology without worrying about it all the time. With adequate mobile protection, you may browse, text, or simply browse through your pictures with confidence and peace of mind.&#13;&#10;', 'media/099647d94105b9c6029097c97d37a36bmobile_security.jpg'),
(19, 'Sample123', 'Description', 'Topic ', 'Content', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(8) NOT NULL,
  `question_no` varchar(8) NOT NULL,
  `question` varchar(512) NOT NULL,
  `choice1` varchar(128) NOT NULL,
  `choice2` varchar(128) NOT NULL,
  `choice3` varchar(128) NOT NULL,
  `choice4` varchar(128) NOT NULL,
  `answer` varchar(128) NOT NULL,
  `topic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question_no`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `topic`) VALUES
(58, '1', 'What is phishing?', 'A type of malware', 'A social engineering attack', 'A hardware hacking technique', 'A network attack', 'A social engineering attack', 'Safe Internet Browsing'),
(59, '2', 'What is a strong password?', 'A short, easy-to-remember password', 'A password that includes personal information', 'A long, complex password with a mix of characters', 'A password that is the same for all accounts', 'A long, complex password with a mix of characters', 'Safe Internet Browsing'),
(60, '3', 'Which of the following is a secure website?', 'A website with an HTTP address', 'A website with an HTTPS address', 'A website with a .com domain', 'A website with a .gov domain', 'A website with an HTTPS address', 'Safe Internet Browsing'),
(61, '4', 'Why is it important to keep software up-to-date?', 'To improve performance', 'To add new features', 'To fix security vulnerabilities', 'To make the software look better', 'To fix security vulnerabilities', 'Safe Internet Browsing'),
(64, '1', 'What would you do if your personal account and information is compromised?', 'Ignore it, maybe it will all the problems will end like it was nothing.', 'Change your passwords and alert the relevant authorities.', 'Edit your personal information to confuse the attackers', 'Delete your account immediately.', 'Change your passwords and alert the relevant authorities.', 'Protecting Personal Information'),
(65, '2', 'Which of the following would be the best way of disposing old documents containing personal information?', 'Have a close friend take care of it.', 'Throw them in the trash accordingly.', 'Burn the documents', 'Shred the documents', 'Shred the documents', 'Protecting Personal Information'),
(67, '3', 'Which of the following can be considered the most reliable password?', '@5kY0uR53lF', 'Gen3Cavite', 'September2001', '@Family123@()', '@5kY0uR53lF', 'Protecting Personal Information'),
(68, '4', 'Which of the following is an example of Biometrics?', 'Facial Recognition', 'Signature Recognition', 'Fingerprint Recognition', 'All of the Above', 'All of the Above', 'Protecting Personal Information'),
(70, '5', 'What is the purpose of cybersecurity laws in the Philippines?', 'To provide guidelines for the legal handling of personal data, establish measures against cybercrimes, and enhance the overall s', 'To limit and monitor all online activities of citizens to ensure national security.', 'To mandate the registration of all electronic devices used within the country.', 'To limit and monitor all online activities of citizens to ensure national security.', 'To provide guidelines for the legal handling of personal data, establish measures against cybercrimes, and enhance the overall s', 'Protecting Personal Information'),
(71, '6', 'Why is learning cybersecurity laws in the Philippines important?', 'To understand the regulations and restrictions on using social media platforms and online games', 'To ensure compliance with laws that protect personal data, prevent cybercrimes, and promote safe online practices', 'To prepare for mandatory government exams on digital literacy and cybersecurity', 'To enhance one&#39;s knowledge of international cybersecurity standards and apply them locally', 'To ensure compliance with laws that protect personal data, prevent cybercrimes, and promote safe online practices', 'Protecting Personal Information'),
(72, '7', 'Which of the following is NOT specifically a cybersecurity law in the Philippines?', 'Data Privacy Act of 2012', 'Anti-Photo and Video Voyeurism Act of 2009', 'Cybercrime Prevention Act of 2012', 'Intellectual Property Code of the Philippines', 'Intellectual Property Code of the Philippines', 'Protecting Personal Information'),
(73, '8', 'What is multi-factor authentication (MFA)?', 'A security measure that uses complex passwords, ensuring that unauthorized users cannot easily guess them', 'A process of encrypting sensitive data to protect it from cyber threats', 'A verification method that relies on multiple layers of security, typically including something you know (like a password), some', 'An authentication method that requires users to change their passwords periodically to maintain security', 'A verification method that relies on multiple layers of security, typically including something you know (like a password), some', 'Protecting Personal Information'),
(74, '1', 'What is cybersecurity?', 'The practice of designing software and hardware to enhance digital entertainment experiences', 'A system of creating and managing passwords to secure online accounts', 'The process of tracking and analyzing user behavior to improve internet marketing strategies', 'The field that focuses on protecting computer systems, networks, and data from digital attacks, unauthorized access, and damage', 'The field that focuses on protecting computer systems, networks, and data from digital attacks, unauthorized access, and damage', ' Understanding Cybersecurity'),
(75, '2', 'Can non-IT users protect themselves utilizing cybersecurity methods even though they are not in the IT field?', 'No, only IT professionals have the knowledge and tools to implement cybersecurity measures effectively', 'Yes, non-IT users can protect themselves by using basic cybersecurity practices like strong passwords, regular software updates,', 'No, cybersecurity methods are too complex for non-IT users to understand and apply', 'Yes, but only if they undergo extensive training and certification in cybersecurity', 'Yes, non-IT users can protect themselves by using basic cybersecurity practices like strong passwords, regular software updates,', ' Understanding Cybersecurity'),
(76, '3', 'Which of the following is NOT a cybersecurity threat?', 'Ransomware', 'IoT vulnerabilities', 'Phishing', 'Two-Factor Authentication', 'Two-Factor Authentication', ' Understanding Cybersecurity'),
(77, '4', 'Why should you read the security policy notes that come with software updates?', 'To be aware of any potential impacts on your device&#39;s functionality', 'To learn about design changes', 'To understand how new security measures protect your data and privacy', 'To know which apps will be deleted', 'To understand how new security measures protect your data and privacy', ' Understanding Cybersecurity'),
(78, '5', 'How do security policies in software updates benefit users?', 'By enhancing the graphical user interface to make it more user-friendly', 'By ensuring compliance with the latest legal requirements and protecting against vulnerabilities, which helps secure personal da', 'By adding new entertainment features and applications', 'By improving battery life through optimized software', 'By ensuring compliance with the latest legal requirements and protecting against vulnerabilities, which helps secure personal da', ' Understanding Cybersecurity'),
(79, '1', 'What is an access point?', 'A security feature for protecting personal information', 'A device that enables wireless devices to connect to a network', 'A security feature for protecting personal information', 'A software application for managing files on a computer', 'A device that enables wireless devices to connect to a network', 'Mobile Device Security'),
(80, '2', 'What does WPA stand for?', 'Wireless Protected Access', 'Wi-Fi Protected Access', 'Wired Privacy Agreement', 'Wireless Private Access', 'Wi-Fi Protected Access', 'Mobile Device Security'),
(81, '3', 'What is the main function of WPA?', 'To protect wireless networks by encrypting data and controlling access', 'To monitor and increase the battery life of wireless devices', 'To provide wireless devices with a faster internet connection', 'To manage wireless device settings remotely', 'To protect wireless networks by encrypting data and controlling access', 'Mobile Device Security'),
(82, '4', 'What is Mobile Security?', 'The practice of regularly updating your mobile apps to the latest version', 'The enhancement of mobile device screen resolutions for better display quality', 'The practice of protecting mobile devices from digital threats, unauthorized access, and data breaches', 'The management of mobile device settings to enhance performance', 'The practice of protecting mobile devices from digital threats, unauthorized access, and data breaches', 'Mobile Device Security'),
(83, '5', 'What is the purpose of the SIM Registration Act?', 'To improve customer service experience for mobile users', 'To ensure the technical compatibility of all mobile devices in the country', 'To regulate the pricing of mobile data plans', 'To require the registration of SIM cards to enhance accountability, help combat crimes, and prevent scams and fraud', 'To require the registration of SIM cards to enhance accountability, help combat crimes, and prevent scams and fraud', 'Mobile Device Security'),
(84, '1', 'dogma', '123', 'tggg', 'rene', 'rene34', 'tggg', 'Phishing Scams 101'),
(86, '5', 'Which of the following images does not describe directly a method of safe Internet browsing?', 'choice_images/846887dc9409724c0ff6c13381ad636aFirewall.jpg', 'choice_images/846887dc9409724c0ff6c13381ad636aVPN.jpg', 'choice_images/846887dc9409724c0ff6c13381ad636aIcognito Mode.jpg', 'choice_images/846887dc9409724c0ff6c13381ad636aCookies1.jpg', 'choice_images/846887dc9409724c0ff6c13381ad636aCookies1.jpg', 'Safe Internet Browsing'),
(87, '9', 'Which of the following is not a password alternative?', 'choice_images/1d690a7647251e6358f326c983767563One-Time-Password.jpg', 'choice_images/1d690a7647251e6358f326c983767563Password.jpg', 'choice_images/1d690a7647251e6358f326c983767563Token.jpg', 'choice_images/1d690a7647251e6358f326c983767563Multi Factor.jpg', 'choice_images/1d690a7647251e6358f326c983767563Password.jpg', 'Protecting Personal Information'),
(88, '6', 'Which among the following is not a reliable source to download an app?', 'choice_images/f97b055b2ff7a27cf18b251ebf69abe2Amazon_Appstore-Logo.wine.png', 'choice_images/f97b055b2ff7a27cf18b251ebf69abe2app-store-logo.png', 'choice_images/f97b055b2ff7a27cf18b251ebf69abe2Google-Play-Logo-2012-2015.png', 'choice_images/f97b055b2ff7a27cf18b251ebf69abe2R.png', 'choice_images/f97b055b2ff7a27cf18b251ebf69abe2R.png', ' Understanding Cybersecurity'),
(89, '1', 'This is a Question?', 'Yes', 'No', 'Maybe', 'no', 'Yes', 'Sample123');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_topic`
--

CREATE TABLE `quiz_topic` (
  `id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `time_minutes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_topic`
--

INSERT INTO `quiz_topic` (`id`, `topic`, `time_minutes`) VALUES
(31, 'Safe Internet Browsing', '12'),
(32, 'Protecting Personal Information', '6'),
(33, ' Understanding Cybersecurity', '5'),
(34, 'Mobile Device Security', '15'),
(35, 'Phishing Scams 101', '3'),
(39, 'Sample123', '16');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
(12, 'Trial', 'User', 'trial@gmail.com', 'trial_user', '$2y$10$fQNxXTv1RGU629KUuqRB4ut.XFuzX8hS1BWNdy1tIDUQEh16IG5rG'),
(13, 'Juan', 'DelaCru', 'juann@gmail.com', 'juan', '$2y$10$t31WdhZvaLvlSdIxVEJgHeoJ/LLFOSDvbl9Ps9vJM25f954r4bcXu'),
(14, 'Mark', 'MACARIO', 'ark@gmail.com', 'Gay', '$2y$10$FBURkka4T/0LpNt8QMiAx.C2j9ay0cKEpHdsIWa15dyLAKT8G9GMu'),
(15, 'John', 'Doe', 'jd@email.com', 'JD', '$2y$10$bUAhTCPg5xj7F3G5u3eU2eTPByes/7rQP4LjmvGbeFmGqMmYno.li');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_topic`
--
ALTER TABLE `quiz_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `quiz_topic`
--
ALTER TABLE `quiz_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
