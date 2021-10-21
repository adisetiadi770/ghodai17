# Poinku
Member indomaret
<?xml version="1.0" encoding="utf-8" ?>
<manifest xmlns:android="http://schemas.android.com/apk/res/android" android:compileSdkVersion="31" android:compileSdkVersionCodename="12" android:versionCode="103" android:versionName="3.9.3" package="mypoin.indomaret.android" platformBuildVersionCode="31" platformBuildVersionName="12">
	<uses-sdk android:minSdkVersion="21" android:targetSdkVersion="31" />
	<uses-permission android:name="android.permission.INTERNET" />
	<uses-permission android:name="android.permission.ACCESS_NETWORK_STATE" />
	<uses-permission android:name="android.permission.READ_PHONE_STATE" />
	<uses-permission android:name="android.permission.ACCESS_COARSE_LOCATION" />
	<uses-permission android:name="android.permission.CAMERA" />
	<uses-permission android:name="android.permission.WAKE_LOCK" />
	<uses-permission android:name="android.permission.RECEIVE_BOOT_COMPLETED" />
	<uses-permission android:name="android.permission.VIBRATE" />
	<uses-permission android:name="android.permission.WRITE_EXTERNAL_STORAGE" />
	<uses-permission android:name="android.permission.QUERY_ALL_PACKAGES" />
	<queries>
		<package android:name="com.whatsapp" />
	</queries>
	<uses-permission android:name="android.permission.READ_EXTERNAL_STORAGE" />
	<uses-permission android:name="com.google.android.finsky.permission.BIND_GET_INSTALL_REFERRER_SERVICE" />
	<uses-permission android:name="com.google.android.c2dm.permission.RECEIVE" />
	<application android:allowBackup="false" android:appComponentFactory="androidx.core.app.CoreComponentFactory" android:icon="@mipmap/ic_launcher" android:label="@string/app_name" android:largeHeap="true" android:name="mypoin.indomaret.android.App" android:roundIcon="@mipmap/ic_launcher_round" android:supportsRtl="true" android:theme="@style/AppTheme" android:usesCleartextTraffic="true">
		<activity android:exported="true" android:name="mypoin.indomaret.android.ui.splash.SplashActivity" android:theme="@style/SplashScreenTheme">
			<intent-filter>
				<action android:name="android.intent.action.MAIN" />
				<category android:name="android.intent.category.LAUNCHER" />
			</intent-filter>
		</activity>
		<activity android:exported="true" android:label="@string/app_name" android:launchMode="singleTask" android:name="mypoin.indomaret.android.ui.splash.DeepLinkActivity" android:noHistory="true" android:theme="@style/SplashScreenTheme">
			<intent-filter android:autoVerify="true">
				<action android:name="android.intent.action.VIEW" />
				<category android:name="android.intent.category.DEFAULT" />
				<category android:name="android.intent.category.BROWSABLE" />
				<data android:host="*" android:scheme="indomaretpoinku" />
			</intent-filter>
			<intent-filter android:autoVerify="true">
				<action android:name="android.intent.action.VIEW" />
				<category android:name="android.intent.category.DEFAULT" />
				<category android:name="android.intent.category.BROWSABLE" />
				<data android:host="indomaretpoinku.com" android:scheme="https" />
			</intent-filter>
		</activity>
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/app_name" android:launchMode="singleTask" android:name="mypoin.indomaret.android.ui.login.LoginActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.walkthrough.WalkThroughActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.register.RegisterActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.game.GameActivity" android:screenOrientation="portrait" android:theme="@style/GameTheme" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.login.forgotpin.ForgotPINSMSVerificationActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.referercode.RefererCodeActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.exchange.stamp.detail.CouponRunOutActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.banned.BannedActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.exchange.success.ExchangePointSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.exchange.stamp.detail.ExchangeStampSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:launchMode="singleTop" android:name="mypoin.indomaret.android.ui.version.UpdateVersionActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:launchMode="singleTop" android:name="mypoin.indomaret.android.ui.version.MaintenanceActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.phoneverify.PhoneVerificationActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/change_phone_number" android:name="mypoin.indomaret.android.ui.home.profile.changephoneno.ChangePhoneNoOtpActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.phoneverify.PhoneVerificationSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.profile.changephoneno.ChangePhoneNoSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.segment.SegmentSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/title_tos" android:name="mypoin.indomaret.android.ui.home.home.tos.TosAgreementActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/app_name" android:name="mypoin.indomaret.android.ui.webview.FullWebViewActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/app_name" android:name="mypoin.indomaret.android.ui.webview.NonFullWebViewActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/title_isaku_topup" android:name="mypoin.indomaret.android.ui.home.home.isaku.topup.IsakuTopUpBankWebActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/title_isaku_topup" android:name="mypoin.indomaret.android.ui.home.home.isaku.topup.IsakuTopUpBankActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.register.RegisterSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.register.pin.PinActivationSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:launchMode="singleTop" android:name="mypoin.indomaret.android.ui.home.HomeActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.segment.SegmentActivity" android:screenOrientation="portrait" android:theme="@style/HomeStyle" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/contact_us" android:name="mypoin.indomaret.android.ui.home.profile.contactus.ContactUsActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/icoupon_history" android:name="mypoin.indomaret.android.ui.home.icoupon.history.ICouponHistoryActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/change_phone_number" android:name="mypoin.indomaret.android.ui.home.profile.changephoneno.ChangePhoneNoActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/change_profile" android:name="mypoin.indomaret.android.ui.home.profile.changeprofile.ChangeProfileActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" android:windowSoftInputMode="adjustResize" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/topup_balance" android:name="mypoin.indomaret.android.ui.home.home.isaku.topup.IsakuTopUpActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/pin_activation" android:name="mypoin.indomaret.android.ui.register.pin.PinActivationActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/pin_activation" android:name="mypoin.indomaret.android.ui.register.pin.PinActivationSplashActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/forgot_pin" android:name="mypoin.indomaret.android.ui.login.forgotpin.ForgotPinActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/activate_pass_code" android:name="mypoin.indomaret.android.ui.home.profile.changepin.ChangePinActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/pin_login" android:name="mypoin.indomaret.android.ui.login.pin.PinLoginActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" android:windowSoftInputMode="adjustResize" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/privacy_policy" android:name="mypoin.indomaret.android.ui.home.profile.PrivacyPolicyActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/select_city" android:name="mypoin.indomaret.android.ui.home.profile.changeprofile.city.CityActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/point_and_stamp" android:name="mypoin.indomaret.android.ui.home.home.exchange.ExchangeActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/title_payment" android:name="mypoin.indomaret.android.ui.home.home.isaku.payment.WalletActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/icoupon_exchange" android:name="mypoin.indomaret.android.ui.home.icoupon.detail.ICouponDetailActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/icoupon_detail" android:name="mypoin.indomaret.android.ui.home.home.exchange.stamp.detail.coupon.detail.CouponStampDetailActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/stamp_detail" android:name="mypoin.indomaret.android.ui.home.home.exchange.stamp.detail.StampDetailActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.referercode.RefererCodeSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.profile.referercode.ProfileRefererCodeSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.referercode.HomeRefererCodeSuccessActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.profile.changeprofile.reward.ChangeProfileRewardActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.profile.referercode.ProfileRefererCodeActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.home.referercode.HomeRefererCodeActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/list_promo" android:name="mypoin.indomaret.android.ui.home.home.banner.all.BannerAllActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/promo_recomendation" android:name="mypoin.indomaret.android.ui.home.home.allpromo.AllPromoActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.history.transaction.HistoryTransactionDetailActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="" android:name="mypoin.indomaret.android.ui.home.history.activity.HistoryActivityDetailActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/coupon_detail" android:name="mypoin.indomaret.android.ui.home.home.exchange.coupon.CouponDetailActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/notification" android:name="mypoin.indomaret.android.ui.home.home.notification.NotificationActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/faqs_title" android:name="mypoin.indomaret.android.ui.home.profile.FaqsActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:label="@string/promo_detail" android:name="mypoin.indomaret.android.ui.home.home.promodetail.PromoDetailActivity" android:screenOrientation="portrait" android:theme="@style/MaterialTheme.NoActionBar" />
		<service android:exported="false" android:name="mypoin.indomaret.android.ui.service.fcm.MyFirebaseMessagingService">
			<intent-filter>
				<action android:name="com.google.firebase.MESSAGING_EVENT" />
			</intent-filter>
		</service>
		<service android:name="mypoin.indomaret.android.ui.base.timer.TimerJobService" android:permission="android.permission.BIND_JOB_SERVICE" />
		<receiver android:name="mypoin.indomaret.android.ui.service.fcm.MyFirebaseMessagingReceiver" />
		<receiver android:name="mypoin.indomaret.android.ui.service.AlarmReceiver" />
		<receiver android:enabled="true" android:exported="true" android:name="mypoin.indomaret.android.ui.service.MyBootReceiver">
			<intent-filter>
				<action android:name="android.intent.action.BOOT_COMPLETED" />
			</intent-filter>
		</receiver>
		<meta-data android:name="com.google.firebase.messaging.default_notification_icon" android:resource="@drawable/ic_stat_poinku_appicon" />
		<meta-data android:name="com.google.firebase.messaging.default_notification_color" android:resource="@color/colorPrimary" />
		<meta-data android:name="com.google.firebase.messaging.default_notification_channel_id" android:value="@string/default_notification_channel_id" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityLogin.LoginVerificationActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityCashin.CashinIndomaret.TokenCashinIndomaretActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPayment.HowToPayActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPayment.PaymentResultActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPayment.InquiryPaymentToken.InquiryPaymentTokenActivity" android:screenOrientation="portrait" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:name="com.indomaret.idmmicrolib.Activity.ActivityRegister.RegisterVerificationActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityRegister.RegisterPinActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityRegister.RegisterActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPairing.UnpairingActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPairing.SyaratKetentuanActivity" android:screenOrientation="portrait" />
		<uses-library android:name="org.apache.http.legacy" android:required="false" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPayment.ListPaymentMethodActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPairing.FailedPairingActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPairing.SuccessPairingActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPairing.HomePairingVerificationActivity" android:screenOrientation="portrait" />
		<activity android:configChanges="keyboardHidden|orientation|screenSize" android:name="com.indomaret.idmmicrolib.Activity.ActivityPairing.PairingVerificationActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPayment.TokenPaymentActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityCashin.ListCashinMerchantActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityCashin.PaymentMerchantActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityCashin.TokenCashInMerchantActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPayment.MerchantPaymentActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPayment.ScanPaymentActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityPayment.PaymentKonfirmasiActivity" android:screenOrientation="portrait" />
		<activity android:name="com.indomaret.idmmicrolib.Activity.ActivityCashin.CashinIndomaret.PaymentMerchantIndomaretActivity" android:screenOrientation="portrait" />
		<provider android:authorities="com.indomaret.idmmicrolib" android:enabled="true" android:exported="false" android:initOrder="2147483647" android:name="com.indomaret.idmmicrolib.LibContentProvider" />
		<service android:directBootAware="true" android:exported="false" android:name="com.google.firebase.components.ComponentDiscoveryService">
			<meta-data android:name="com.google.firebase.components:com.google.firebase.analytics.ktx.FirebaseAnalyticsKtxRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.messaging.FirebaseMessagingRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.crashlytics.ktx.FirebaseCrashlyticsKtxRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.remoteconfig.ktx.FirebaseRemoteConfigKtxRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.ktx.FirebaseCommonKtxRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.analytics.connector.internal.AnalyticsConnectorRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.crashlytics.CrashlyticsRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.datatransport.TransportRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.remoteconfig.RemoteConfigRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.installations.FirebaseInstallationsRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
			<meta-data android:name="com.google.firebase.components:com.google.firebase.abt.component.AbtRegistrar" android:value="com.google.firebase.components.ComponentRegistrar" />
		</service>
		<receiver android:enabled="true" android:exported="false" android:name="com.google.android.gms.measurement.AppMeasurementReceiver" />
		<service android:enabled="true" android:exported="false" android:name="com.google.android.gms.measurement.AppMeasurementService" />
		<service android:enabled="true" android:exported="false" android:name="com.google.android.gms.measurement.AppMeasurementJobService" android:permission="android.permission.BIND_JOB_SERVICE" />
		<receiver android:exported="true" android:name="com.google.firebase.iid.FirebaseInstanceIdReceiver" android:permission="com.google.android.c2dm.permission.SEND">
			<intent-filter>
				<action android:name="com.google.android.c2dm.intent.RECEIVE" />
			</intent-filter>
		</receiver>
		<service android:directBootAware="true" android:exported="false" android:name="com.google.firebase.messaging.FirebaseMessagingService">
			<intent-filter android:priority="-500">
				<action android:name="com.google.firebase.MESSAGING_EVENT" />
			</intent-filter>
		</service>
		<meta-data android:name="com.bumptech.glide.integration.okhttp3.OkHttpGlideModule" android:value="GlideModule" />
		<provider android:authorities="mypoin.indomaret.android.firebaseinitprovider" android:directBootAware="true" android:exported="false" android:initOrder="100" android:name="com.google.firebase.provider.FirebaseInitProvider" />
		<meta-data android:name="com.google.android.gms.version" android:value="@integer/google_play_services_version" />
		<provider android:authorities="mypoin.indomaret.android.androidx-startup" android:exported="false" android:name="androidx.startup.InitializationProvider">
			<meta-data android:name="androidx.emoji2.text.EmojiCompatInitializer" android:value="androidx.startup" />
			<meta-data android:name="androidx.lifecycle.ProcessLifecycleInitializer" android:value="androidx.startup" />
		</provider>
		<service android:exported="false" android:name="com.google.android.datatransport.runtime.backends.TransportBackendDiscovery">
			<meta-data android:name="backend:com.google.android.datatransport.cct.CctBackendFactory" android:value="cct" />
		</service>
		<service android:exported="false" android:name="com.google.android.datatransport.runtime.scheduling.jobscheduling.JobInfoSchedulerService" android:permission="android.permission.BIND_JOB_SERVICE" />
		<receiver android:exported="false" android:name="com.google.android.datatransport.runtime.scheduling.jobscheduling.AlarmManagerSchedulerBroadcastReceiver" />
		<meta-data android:name="com.android.dynamic.apk.fused.modules" android:value="base" />
		<meta-data android:name="com.android.stamp.source" android:value="https://play.google.com/store" />
		<meta-data android:name="com.android.stamp.type" android:value="STAMP_TYPE_STANDALONE_APK" />
		<meta-data android:name="com.android.vending.splits" android:value="@xml/splits0" />
		<meta-data android:name="com.android.vending.derived.apk.id" android:value="1" />
	</application>
</manifest>