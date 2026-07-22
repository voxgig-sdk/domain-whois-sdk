<?php
declare(strict_types=1);

// DomainWhois SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

DomainWhoisUtility::setRegistrar(function (DomainWhoisUtility $u): void {
    $u->clean = [DomainWhoisClean::class, 'call'];
    $u->done = [DomainWhoisDone::class, 'call'];
    $u->make_error = [DomainWhoisMakeError::class, 'call'];
    $u->feature_add = [DomainWhoisFeatureAdd::class, 'call'];
    $u->feature_hook = [DomainWhoisFeatureHook::class, 'call'];
    $u->feature_init = [DomainWhoisFeatureInit::class, 'call'];
    $u->fetcher = [DomainWhoisFetcher::class, 'call'];
    $u->make_fetch_def = [DomainWhoisMakeFetchDef::class, 'call'];
    $u->make_context = [DomainWhoisMakeContext::class, 'call'];
    $u->make_options = [DomainWhoisMakeOptions::class, 'call'];
    $u->make_request = [DomainWhoisMakeRequest::class, 'call'];
    $u->make_response = [DomainWhoisMakeResponse::class, 'call'];
    $u->make_result = [DomainWhoisMakeResult::class, 'call'];
    $u->make_point = [DomainWhoisMakePoint::class, 'call'];
    $u->make_spec = [DomainWhoisMakeSpec::class, 'call'];
    $u->make_url = [DomainWhoisMakeUrl::class, 'call'];
    $u->param = [DomainWhoisParam::class, 'call'];
    $u->prepare_auth = [DomainWhoisPrepareAuth::class, 'call'];
    $u->prepare_body = [DomainWhoisPrepareBody::class, 'call'];
    $u->prepare_headers = [DomainWhoisPrepareHeaders::class, 'call'];
    $u->prepare_method = [DomainWhoisPrepareMethod::class, 'call'];
    $u->prepare_params = [DomainWhoisPrepareParams::class, 'call'];
    $u->prepare_path = [DomainWhoisPreparePath::class, 'call'];
    $u->prepare_query = [DomainWhoisPrepareQuery::class, 'call'];
    $u->result_basic = [DomainWhoisResultBasic::class, 'call'];
    $u->result_body = [DomainWhoisResultBody::class, 'call'];
    $u->result_headers = [DomainWhoisResultHeaders::class, 'call'];
    $u->transform_request = [DomainWhoisTransformRequest::class, 'call'];
    $u->transform_response = [DomainWhoisTransformResponse::class, 'call'];
});
