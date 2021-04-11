using System;
using CKUT.Core.Enums.Sample;
using CKUT.Core.Models.Sample;
using Microsoft.AspNetCore.Mvc;
using CKUT.Core.Services;
using CKUT.Core.Services.Sample;

namespace CKUT.Web.Controllers
{
    [Route("api/v1/sample")]
    public class SampleController : Controller
    {
        private readonly ICalculatorService _calculatorService;
        private const string InputNumber = "number";
        private const string Method = "method";

        public SampleController(ICalculatorService calculatorService)
        {
            _calculatorService = calculatorService;
        }

        [HttpGet("round-result")]
        public decimal GetResult([FromQuery(Name = InputNumber)] string number, [FromQuery(Name = Method)] string roundMethod)
        {
            var result = _calculatorService.Calculate(new InputDetail()
            {
                InputNumber = Convert.ToDecimal(number),
                CalculatedType = (CalculatedType)Convert.ToInt16(roundMethod),
            });

            return result;
        }
    }
}