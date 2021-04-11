using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using CKUT.Core.Services;
using CKUT.Core.Services.Sample;
using Microsoft.AspNetCore.Http;
using Microsoft.Extensions.DependencyInjection;

namespace CKUT.Web.Helpers
{
    public static class DependencyInjection
    {
        public static IServiceCollection RegisterInternalDependencies(this IServiceCollection services)
        {
            InternalDependencies(services);
            return services;
        }

        public static IServiceCollection RegisterHttpContext(this IServiceCollection services)
        {
            services.AddHttpContextAccessor();
            services.AddSingleton<IHttpContextAccessor, HttpContextAccessor>();
            return services;
        }

        private static void InternalDependencies(IServiceCollection services)
        {
            services.AddTransient<ICalculatorService, CalculatorService>();
        }
    }
}
