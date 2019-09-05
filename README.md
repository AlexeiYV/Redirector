# Redirector

## Basic workflow

Basic Redirector workflow is this:

`https://root_domain/rotator.php?rotator_lander=lander_name?param1=param_value -> https://random_sub_somain.root_domain/lander_name?param_value`

## URL Params

If you add this url to Voluum:
`https://summer-rewards.com/redirector.php?rotator_lander=0509-test?cid=12345`
final redirect will be to one random subdomain from the set you provided in config (will be described later). 
**Query params will be saved.**
Example resulting url:
https://2.summer-rewards.com/0509-test?cid=12345


