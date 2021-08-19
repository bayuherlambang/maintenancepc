RESTful API Maintenance PC

an API server to throw data to client app (build by autoit) and save to database for daily PC maintenance activity.

API Documentation
1. get hostname
URL : <<server>>/public/api/workstation/hostname
Method : GET
Example :
    ulr : localhost/maintenancepc/public/api/workstation/c242smg094

    body:
      hostname:C242SMG094
      Content-Type:application/x-www-form-urlencoded
    response:
    {
    "message": "Success!",
    "values": {
          "id": 94,
          "hostname": "C242SMG094",
          "ext": "62194",
          "ip_ext": "172.22.4.96",
          "model": "HP 280 G2 SFF",
          "serialnumber": "4CE8051C0B",
          "site": "SMG2"
      }
    }
2. save data:
URL : <<server>>/public/api/maintenance/
Method : PATCH
Example :
  url : localhost/maintenancepc/public/api/maintenance/
  body :
    hostname:C242SMG111
    Content-Type:application/x-www-form-urlencoded
    response :
    {
      "message": "Success!",
      "value": "{\"id_ws\":92,\"updated_at\":\"2021-08-19 22:27:25\",\"created_at\":\"2021-08-19 22:27:25\",\"id\":7}"
    }

Navigate to <<server>>/public/maintenance to view saved data and you able to filter by date. table by datatables.

General workflow for PC maintenance:
  running exe:
  updating mcafee
  deleting user profile
  ...(and other routine stuff)
  get Hostname
  call API to save data using hostname as parameter
  ...loop for each and other PC
  open maintenance web portal
  filter by date(today)
  copy data to excel
  create report using BCA template
