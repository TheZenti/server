<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitDAV
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\DAV\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\DAV\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'OCA\\DAV\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\DAV\\AppInfo\\PluginManager' => __DIR__ . '/..' . '/../lib/AppInfo/PluginManager.php',
        'OCA\\DAV\\Avatars\\AvatarHome' => __DIR__ . '/..' . '/../lib/Avatars/AvatarHome.php',
        'OCA\\DAV\\Avatars\\AvatarNode' => __DIR__ . '/..' . '/../lib/Avatars/AvatarNode.php',
        'OCA\\DAV\\Avatars\\RootCollection' => __DIR__ . '/..' . '/../lib/Avatars/RootCollection.php',
        'OCA\\DAV\\BackgroundJob\\GenerateBirthdayCalendarBackgroundJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/GenerateBirthdayCalendarBackgroundJob.php',
        'OCA\\DAV\\CalDAV\\Activity\\Backend' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Backend.php',
        'OCA\\DAV\\CalDAV\\Activity\\Filter\\Calendar' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Filter/Calendar.php',
        'OCA\\DAV\\CalDAV\\Activity\\Filter\\Todo' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Filter/Todo.php',
        'OCA\\DAV\\CalDAV\\Activity\\Provider\\Base' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Provider/Base.php',
        'OCA\\DAV\\CalDAV\\Activity\\Provider\\Calendar' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Provider/Calendar.php',
        'OCA\\DAV\\CalDAV\\Activity\\Provider\\Event' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Provider/Event.php',
        'OCA\\DAV\\CalDAV\\Activity\\Provider\\Todo' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Provider/Todo.php',
        'OCA\\DAV\\CalDAV\\Activity\\Setting\\Calendar' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Setting/Calendar.php',
        'OCA\\DAV\\CalDAV\\Activity\\Setting\\Event' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Setting/Event.php',
        'OCA\\DAV\\CalDAV\\Activity\\Setting\\Todo' => __DIR__ . '/..' . '/../lib/CalDAV/Activity/Setting/Todo.php',
        'OCA\\DAV\\CalDAV\\BirthdayCalendar\\EnablePlugin' => __DIR__ . '/..' . '/../lib/CalDAV/BirthdayCalendar/EnablePlugin.php',
        'OCA\\DAV\\CalDAV\\BirthdayService' => __DIR__ . '/..' . '/../lib/CalDAV/BirthdayService.php',
        'OCA\\DAV\\CalDAV\\CalDavBackend' => __DIR__ . '/..' . '/../lib/CalDAV/CalDavBackend.php',
        'OCA\\DAV\\CalDAV\\Calendar' => __DIR__ . '/..' . '/../lib/CalDAV/Calendar.php',
        'OCA\\DAV\\CalDAV\\CalendarHome' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarHome.php',
        'OCA\\DAV\\CalDAV\\CalendarImpl' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarImpl.php',
        'OCA\\DAV\\CalDAV\\CalendarManager' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarManager.php',
        'OCA\\DAV\\CalDAV\\CalendarObject' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarObject.php',
        'OCA\\DAV\\CalDAV\\CalendarRoot' => __DIR__ . '/..' . '/../lib/CalDAV/CalendarRoot.php',
        'OCA\\DAV\\CalDAV\\Plugin' => __DIR__ . '/..' . '/../lib/CalDAV/Plugin.php',
        'OCA\\DAV\\CalDAV\\Principal\\Collection' => __DIR__ . '/..' . '/../lib/CalDAV/Principal/Collection.php',
        'OCA\\DAV\\CalDAV\\Principal\\User' => __DIR__ . '/..' . '/../lib/CalDAV/Principal/User.php',
        'OCA\\DAV\\CalDAV\\PublicCalendar' => __DIR__ . '/..' . '/../lib/CalDAV/PublicCalendar.php',
        'OCA\\DAV\\CalDAV\\PublicCalendarObject' => __DIR__ . '/..' . '/../lib/CalDAV/PublicCalendarObject.php',
        'OCA\\DAV\\CalDAV\\PublicCalendarRoot' => __DIR__ . '/..' . '/../lib/CalDAV/PublicCalendarRoot.php',
        'OCA\\DAV\\CalDAV\\Publishing\\PublishPlugin' => __DIR__ . '/..' . '/../lib/CalDAV/Publishing/PublishPlugin.php',
        'OCA\\DAV\\CalDAV\\Publishing\\Xml\\Publisher' => __DIR__ . '/..' . '/../lib/CalDAV/Publishing/Xml/Publisher.php',
        'OCA\\DAV\\CalDAV\\Schedule\\IMipPlugin' => __DIR__ . '/..' . '/../lib/CalDAV/Schedule/IMipPlugin.php',
        'OCA\\DAV\\CalDAV\\Schedule\\Plugin' => __DIR__ . '/..' . '/../lib/CalDAV/Schedule/Plugin.php',
        'OCA\\DAV\\CalDAV\\Search\\SearchPlugin' => __DIR__ . '/..' . '/../lib/CalDAV/Search/SearchPlugin.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\CompFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/CompFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\LimitFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/LimitFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\OffsetFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/OffsetFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\ParamFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/ParamFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\PropFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/PropFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Filter\\SearchTermFilter' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Filter/SearchTermFilter.php',
        'OCA\\DAV\\CalDAV\\Search\\Xml\\Request\\CalendarSearchReport' => __DIR__ . '/..' . '/../lib/CalDAV/Search/Xml/Request/CalendarSearchReport.php',
        'OCA\\DAV\\Capabilities' => __DIR__ . '/..' . '/../lib/Capabilities.php',
        'OCA\\DAV\\CardDAV\\AddressBook' => __DIR__ . '/..' . '/../lib/CardDAV/AddressBook.php',
        'OCA\\DAV\\CardDAV\\AddressBookImpl' => __DIR__ . '/..' . '/../lib/CardDAV/AddressBookImpl.php',
        'OCA\\DAV\\CardDAV\\AddressBookRoot' => __DIR__ . '/..' . '/../lib/CardDAV/AddressBookRoot.php',
        'OCA\\DAV\\CardDAV\\CardDavBackend' => __DIR__ . '/..' . '/../lib/CardDAV/CardDavBackend.php',
        'OCA\\DAV\\CardDAV\\ContactsManager' => __DIR__ . '/..' . '/../lib/CardDAV/ContactsManager.php',
        'OCA\\DAV\\CardDAV\\Converter' => __DIR__ . '/..' . '/../lib/CardDAV/Converter.php',
        'OCA\\DAV\\CardDAV\\ImageExportPlugin' => __DIR__ . '/..' . '/../lib/CardDAV/ImageExportPlugin.php',
        'OCA\\DAV\\CardDAV\\PhotoCache' => __DIR__ . '/..' . '/../lib/CardDAV/PhotoCache.php',
        'OCA\\DAV\\CardDAV\\Plugin' => __DIR__ . '/..' . '/../lib/CardDAV/Plugin.php',
        'OCA\\DAV\\CardDAV\\SyncService' => __DIR__ . '/..' . '/../lib/CardDAV/SyncService.php',
        'OCA\\DAV\\CardDAV\\UserAddressBooks' => __DIR__ . '/..' . '/../lib/CardDAV/UserAddressBooks.php',
        'OCA\\DAV\\CardDAV\\Xml\\Groups' => __DIR__ . '/..' . '/../lib/CardDAV/Xml/Groups.php',
        'OCA\\DAV\\Command\\CreateAddressBook' => __DIR__ . '/..' . '/../lib/Command/CreateAddressBook.php',
        'OCA\\DAV\\Command\\CreateCalendar' => __DIR__ . '/..' . '/../lib/Command/CreateCalendar.php',
        'OCA\\DAV\\Command\\ListCalendars' => __DIR__ . '/..' . '/../lib/Command/ListCalendars.php',
        'OCA\\DAV\\Command\\MoveCalendar' => __DIR__ . '/..' . '/../lib/Command/MoveCalendar.php',
        'OCA\\DAV\\Command\\SyncBirthdayCalendar' => __DIR__ . '/..' . '/../lib/Command/SyncBirthdayCalendar.php',
        'OCA\\DAV\\Command\\SyncSystemAddressBook' => __DIR__ . '/..' . '/../lib/Command/SyncSystemAddressBook.php',
        'OCA\\DAV\\Comments\\CommentNode' => __DIR__ . '/..' . '/../lib/Comments/CommentNode.php',
        'OCA\\DAV\\Comments\\CommentsPlugin' => __DIR__ . '/..' . '/../lib/Comments/CommentsPlugin.php',
        'OCA\\DAV\\Comments\\EntityCollection' => __DIR__ . '/..' . '/../lib/Comments/EntityCollection.php',
        'OCA\\DAV\\Comments\\EntityTypeCollection' => __DIR__ . '/..' . '/../lib/Comments/EntityTypeCollection.php',
        'OCA\\DAV\\Comments\\RootCollection' => __DIR__ . '/..' . '/../lib/Comments/RootCollection.php',
        'OCA\\DAV\\Connector\\LegacyDAVACL' => __DIR__ . '/..' . '/../lib/Connector/LegacyDAVACL.php',
        'OCA\\DAV\\Connector\\PublicAuth' => __DIR__ . '/..' . '/../lib/Connector/PublicAuth.php',
        'OCA\\DAV\\Connector\\Sabre\\AppEnabledPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/AppEnabledPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Auth' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Auth.php',
        'OCA\\DAV\\Connector\\Sabre\\BearerAuth' => __DIR__ . '/..' . '/../lib/Connector/Sabre/BearerAuth.php',
        'OCA\\DAV\\Connector\\Sabre\\BlockLegacyClientPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/BlockLegacyClientPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\CachingTree' => __DIR__ . '/..' . '/../lib/Connector/Sabre/CachingTree.php',
        'OCA\\DAV\\Connector\\Sabre\\ChecksumList' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ChecksumList.php',
        'OCA\\DAV\\Connector\\Sabre\\CommentPropertiesPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/CommentPropertiesPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\CopyEtagHeaderPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/CopyEtagHeaderPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\CustomPropertiesBackend' => __DIR__ . '/..' . '/../lib/Connector/Sabre/CustomPropertiesBackend.php',
        'OCA\\DAV\\Connector\\Sabre\\DavAclPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/DavAclPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Directory' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Directory.php',
        'OCA\\DAV\\Connector\\Sabre\\DummyGetResponsePlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/DummyGetResponsePlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\ExceptionLoggerPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ExceptionLoggerPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\EntityTooLarge' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/EntityTooLarge.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\FileLocked' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/FileLocked.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\Forbidden' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/Forbidden.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\InvalidPath' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/InvalidPath.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\PasswordLoginForbidden' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/PasswordLoginForbidden.php',
        'OCA\\DAV\\Connector\\Sabre\\Exception\\UnsupportedMediaType' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Exception/UnsupportedMediaType.php',
        'OCA\\DAV\\Connector\\Sabre\\FakeLockerPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/FakeLockerPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\File' => __DIR__ . '/..' . '/../lib/Connector/Sabre/File.php',
        'OCA\\DAV\\Connector\\Sabre\\FilesPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/FilesPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\FilesReportPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/FilesReportPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\LockPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/LockPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\MaintenancePlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/MaintenancePlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Node' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Node.php',
        'OCA\\DAV\\Connector\\Sabre\\ObjectTree' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ObjectTree.php',
        'OCA\\DAV\\Connector\\Sabre\\Principal' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Principal.php',
        'OCA\\DAV\\Connector\\Sabre\\QuotaPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/QuotaPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\Server' => __DIR__ . '/..' . '/../lib/Connector/Sabre/Server.php',
        'OCA\\DAV\\Connector\\Sabre\\ServerFactory' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ServerFactory.php',
        'OCA\\DAV\\Connector\\Sabre\\ShareTypeList' => __DIR__ . '/..' . '/../lib/Connector/Sabre/ShareTypeList.php',
        'OCA\\DAV\\Connector\\Sabre\\SharesPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/SharesPlugin.php',
        'OCA\\DAV\\Connector\\Sabre\\TagList' => __DIR__ . '/..' . '/../lib/Connector/Sabre/TagList.php',
        'OCA\\DAV\\Connector\\Sabre\\TagsPlugin' => __DIR__ . '/..' . '/../lib/Connector/Sabre/TagsPlugin.php',
        'OCA\\DAV\\Controller\\BirthdayCalendarController' => __DIR__ . '/..' . '/../lib/Controller/BirthdayCalendarController.php',
        'OCA\\DAV\\DAV\\CustomPropertiesBackend' => __DIR__ . '/..' . '/../lib/DAV/CustomPropertiesBackend.php',
        'OCA\\DAV\\DAV\\GroupPrincipalBackend' => __DIR__ . '/..' . '/../lib/DAV/GroupPrincipalBackend.php',
        'OCA\\DAV\\DAV\\PublicAuth' => __DIR__ . '/..' . '/../lib/DAV/PublicAuth.php',
        'OCA\\DAV\\DAV\\Sharing\\Backend' => __DIR__ . '/..' . '/../lib/DAV/Sharing/Backend.php',
        'OCA\\DAV\\DAV\\Sharing\\IShareable' => __DIR__ . '/..' . '/../lib/DAV/Sharing/IShareable.php',
        'OCA\\DAV\\DAV\\Sharing\\Plugin' => __DIR__ . '/..' . '/../lib/DAV/Sharing/Plugin.php',
        'OCA\\DAV\\DAV\\Sharing\\Xml\\Invite' => __DIR__ . '/..' . '/../lib/DAV/Sharing/Xml/Invite.php',
        'OCA\\DAV\\DAV\\Sharing\\Xml\\ShareRequest' => __DIR__ . '/..' . '/../lib/DAV/Sharing/Xml/ShareRequest.php',
        'OCA\\DAV\\DAV\\SystemPrincipalBackend' => __DIR__ . '/..' . '/../lib/DAV/SystemPrincipalBackend.php',
        'OCA\\DAV\\Files\\BrowserErrorPagePlugin' => __DIR__ . '/..' . '/../lib/Files/BrowserErrorPagePlugin.php',
        'OCA\\DAV\\Files\\FileSearchBackend' => __DIR__ . '/..' . '/../lib/Files/FileSearchBackend.php',
        'OCA\\DAV\\Files\\FilesHome' => __DIR__ . '/..' . '/../lib/Files/FilesHome.php',
        'OCA\\DAV\\Files\\RootCollection' => __DIR__ . '/..' . '/../lib/Files/RootCollection.php',
        'OCA\\DAV\\Files\\Sharing\\FilesDropPlugin' => __DIR__ . '/..' . '/../lib/Files/Sharing/FilesDropPlugin.php',
        'OCA\\DAV\\Files\\Sharing\\PublicLinkCheckPlugin' => __DIR__ . '/..' . '/../lib/Files/Sharing/PublicLinkCheckPlugin.php',
        'OCA\\DAV\\HookManager' => __DIR__ . '/..' . '/../lib/HookManager.php',
        'OCA\\DAV\\Migration\\BuildCalendarSearchIndex' => __DIR__ . '/..' . '/../lib/Migration/BuildCalendarSearchIndex.php',
        'OCA\\DAV\\Migration\\BuildCalendarSearchIndexBackgroundJob' => __DIR__ . '/..' . '/../lib/Migration/BuildCalendarSearchIndexBackgroundJob.php',
        'OCA\\DAV\\Migration\\CalDAVRemoveEmptyValue' => __DIR__ . '/..' . '/../lib/Migration/CalDAVRemoveEmptyValue.php',
        'OCA\\DAV\\Migration\\FixBirthdayCalendarComponent' => __DIR__ . '/..' . '/../lib/Migration/FixBirthdayCalendarComponent.php',
        'OCA\\DAV\\Migration\\Version1004Date20170825134824' => __DIR__ . '/..' . '/../lib/Migration/Version1004Date20170825134824.php',
        'OCA\\DAV\\Migration\\Version1004Date20170919104507' => __DIR__ . '/..' . '/../lib/Migration/Version1004Date20170919104507.php',
        'OCA\\DAV\\Migration\\Version1004Date20170924124212' => __DIR__ . '/..' . '/../lib/Migration/Version1004Date20170924124212.php',
        'OCA\\DAV\\Migration\\Version1004Date20170926103422' => __DIR__ . '/..' . '/../lib/Migration/Version1004Date20170926103422.php',
        'OCA\\DAV\\RootCollection' => __DIR__ . '/..' . '/../lib/RootCollection.php',
        'OCA\\DAV\\Server' => __DIR__ . '/..' . '/../lib/Server.php',
        'OCA\\DAV\\Settings\\CalDAVSettings' => __DIR__ . '/..' . '/../lib/Settings/CalDAVSettings.php',
        'OCA\\DAV\\SystemTag\\SystemTagMappingNode' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagMappingNode.php',
        'OCA\\DAV\\SystemTag\\SystemTagNode' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagNode.php',
        'OCA\\DAV\\SystemTag\\SystemTagPlugin' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagPlugin.php',
        'OCA\\DAV\\SystemTag\\SystemTagsByIdCollection' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagsByIdCollection.php',
        'OCA\\DAV\\SystemTag\\SystemTagsObjectMappingCollection' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagsObjectMappingCollection.php',
        'OCA\\DAV\\SystemTag\\SystemTagsObjectTypeCollection' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagsObjectTypeCollection.php',
        'OCA\\DAV\\SystemTag\\SystemTagsRelationsCollection' => __DIR__ . '/..' . '/../lib/SystemTag/SystemTagsRelationsCollection.php',
        'OCA\\DAV\\Upload\\AssemblyStream' => __DIR__ . '/..' . '/../lib/Upload/AssemblyStream.php',
        'OCA\\DAV\\Upload\\ChunkingPlugin' => __DIR__ . '/..' . '/../lib/Upload/ChunkingPlugin.php',
        'OCA\\DAV\\Upload\\FutureFile' => __DIR__ . '/..' . '/../lib/Upload/FutureFile.php',
        'OCA\\DAV\\Upload\\RootCollection' => __DIR__ . '/..' . '/../lib/Upload/RootCollection.php',
        'OCA\\DAV\\Upload\\UploadFolder' => __DIR__ . '/..' . '/../lib/Upload/UploadFolder.php',
        'OCA\\DAV\\Upload\\UploadHome' => __DIR__ . '/..' . '/../lib/Upload/UploadHome.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitDAV::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitDAV::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitDAV::$classMap;

        }, null, ClassLoader::class);
    }
}
